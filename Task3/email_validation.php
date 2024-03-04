<?php
require 'Creds.php';
require 'request.php';

// Creating object of Creds class to get the api key stored from the Creds class.



// Checks if the email is valid or not.
/** 
 * @param string $email_address
 * @return bool
 */
function isEmailValid(string $email_address):bool {
    global $apiKey;
    $url = "https://emailvalidation.abstractapi.com/v1/?api_key=$apiKey&email=$email_address";

    // Calling request method to call the api, get json file and parse it.Then parsing the json and storing values as associative array.

    $validation_result = json_decode(request($url),true);
    // echo var_dump($validation_result);

    return $validation_result["is_valid_format"]["text"] =="TRUE" && $validation_result["is_smtp_valid"]["text"] == "TRUE";
}
