<?php

class encryption
{
    function encrypt($string)
    {
        
        // Storing cipher method 
        $ciphering = "AES-128-CTR";

        // Using OpenSSl encryption method 
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options   = 0;

        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '0092333060314200';

        // Storing the encryption key
        $encryption_key = "t3Xt!/eQ#1^401nt3Xt!/eQ#1^401nt3Xt!/eQ#1^401n";

        // Encryption of string process begins
        $encryption = openssl_encrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);

        // Return Encrypted String
        return urlencode($encryption);
        
    }

    function decrypt($encrypted) 
    {

        // Storing cipher method 
        $ciphering = "AES-128-CTR";

        // Using OpenSSl encryption method 
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options   = 0;

        // Non-NULL Initialization Vector for decryption 
        $decryption_iv = '0092333060314200';

        // Storing the decryption key 
        $decryption_key = "t3Xt!/eQ#1^401nt3Xt!/eQ#1^401nt3Xt!/eQ#1^401n";
        
        // Using openssl_decrypt() function to decrypt the data 
        $decryption = openssl_decrypt($encrypted, $ciphering, $decryption_key, $options, $decryption_iv);

        // Return Encrypted String
        return $decryption;

    }

}


?>