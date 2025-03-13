<?php
header('Content-Type: application/json; charset=utf-8');
define("RECAPTCHA_V3_SECRET_KEY", '6LfLgMMhAAAAANazqdxYdGVrXSFg53nOBx83cIDn');

require_once('connectionClass.php');
$ctx = new database();

$token = $_POST['token'];
$date_created = date("Y-m-d H:i:s");
$_POST['date_created'] = $date_created;
$_POST['browser'] = $_SERVER['HTTP_USER_AGENT'];


  
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

if($arrResponse["success"] == '1' && $arrResponse["score"] >= 0.1) {
    
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = array(
        'status' => 'false',
        'message' => 'Invalid Email',
    );
} else {
    
    unset($_POST['token']);
    $_POST['status'] = "Pending";
    $query = $ctx->insertRow('leads',$_POST);
    if( $query['status'] == true && $query['id'] != 0 ) {
        $tx = $ctx->insertRow('email',array( 'userid' => $query['id'], 'status' => 'pending', 'date_created' => $date_created ));
        if( $tx['status'] == true && $tx['id'] != 0 ) {
            $response = array(
                'status' => 'true',
                'message' => 'successs',
                'data' => array (
                    'userid' => $query['id'],
                ),
            );
        } else {
            $response = array(
                'status' => 'falses',
                'message' => $tx['message'],
            );
        }  
    } else {
        $response = array(
            'status' => 'false',
            'message' => $query['message'],
            'lead' => 'lead'
        );
    }

}
    
} else {
    $response = array(
        'status' => 'false',
        'message' => 'Google Captcha Verification Failed, Please try again.',
    );
}

echo json_encode($response);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}