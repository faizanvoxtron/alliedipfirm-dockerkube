<?php
header('Content-Type: application/json; charset=utf-8');
define("RECAPTCHA_V3_SECRET_KEY", '6LfLgMMhAAAAANazqdxYdGVrXSFg53nOBx83cIDn');

require_once('connectionClass.php');
$ctx = new database();

$token = $_POST['token'];
$date_created = date("Y-m-d H:i:s");
$_POST['date_created'] = $date_created;
  
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

if($arrResponse["success"] == '1' && $arrResponse["score"] >= 0.5) {
    unset($_POST['token']);
    $query = $ctx->insertRow('briefs',$_POST);
    if( $query['status'] == true && $query['id'] != 0 ) {
        $tx = $ctx->insertRow('email',array( 'briefid' => $query['id'], 'status' => 'sent', 'date_created' => $date_created ));
        if( $tx['status'] == true && $tx['id'] != 0 ) {
            $response = array(
                'status' => 'true',
                'message' => 'successs',
                'data' => array (
                    'briefid' => $query['id'],
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
            'brief' => 'brief'
        );
    }
} else {
    $response = array(
        'status' => 'false',
        'message' => 'Google Captcha Verification Failed, Please try again.',
    );
}

echo json_encode($response);