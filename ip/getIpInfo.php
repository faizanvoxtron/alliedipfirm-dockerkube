<?php

// set IP address and API access key
function getInfo(){

$ip = getUserIpAddr();

$url = "https://api.ip2location.io/?key=99615432FEB6262B4C63AE78DF2B6037&ip=".$ip;

// $url = "https://ip.seeip.org/geoip/".$ip;
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($result, true);
return $api_result;

}


 function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>
