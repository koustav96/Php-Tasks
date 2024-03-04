<?php
require 'Creds.php';
require 'request.php';

// Checks if the email is valid or not.
/** 
 * @param string $email_address
 * @return bool
 */
function isEmailValid(string $email_address):bool {
    global $apiKey;
    $url = "https://emailvalidation.abstractapi.com/v1/?api_key=$apiKey&email=$email_address";

    $validation_result = json_decode(request($url),true);
    // echo var_dump($validation_result);

    return $validation_result["is_valid_format"]["text"] =="TRUE" && $validation_result["is_smtp_valid"]["text"] == "TRUE";
}
