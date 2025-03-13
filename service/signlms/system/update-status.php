<?php 
require_once('config.php');
 if (isset($_POST['status']) && isset($_POST['userid'])) {
     if ( $_POST['userid'] != "" && $_POST['userid'] != null && $_POST['status'] != null && $_POST['status'] != "") {
          $update = $mysqli->prepare('UPDATE leads SET status = "'.$_POST['status'].'" WHERE id = '.$_POST['userid']);
          $update->execute();
        $response = array(
            'status' => 'true',
            'message' => 'successs',
            'data' => $update
        );
     } else {
        $response = array(
            'status' => 'false',
            'message' => 'Provide User Id and Status Message',
        );
     }
 } else {
    $response = array(
        'status' => 'false',
        'message' => 'Provide User Id and Status Message',
    );
}
 
 echo json_encode($response);
?>