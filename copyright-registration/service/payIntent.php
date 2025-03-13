<?php
    require_once("connectionClass.php");
    require_once('../query/vendor/autoload.php');
    
    $ctx = new database();
    
    // initiate payment sessioin
    \Stripe\Stripe::setApiKey
        
        ('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');
    
    // update stripe payment intent
    $intent = \Stripe\PaymentIntent::update(
        $_POST['intentId'],
        ['amount' => $_POST['amount']]
    );
    
    $response = array(
        'status' => 'true',
    );
    
    
    $ctx->updateRow("payIntents",array("amount"=>(float) $_POST['amount']/100),array("intentId='".$_POST['intentId']."'"));

    echo json_encode($response);
    

?>