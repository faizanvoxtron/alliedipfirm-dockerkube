
<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://v2.api.iphub.info/ip/137.220.37.33');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'X-Key: MTc5MDY6SzhDQzFWTXZZMzRwNHFXMGlNOGpBREJHaUhaY2NucEc=';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;
?>