<?php
/**
 * Executes the url and returns json value.
 */
function request($url): string {
    // Initialize cURL session.
    $ch = curl_init($url);
    // Set cURL options.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Execute cURL session and store the result in $data.
    $data = curl_exec($ch);
    // Close cURL session.
    curl_close($ch);
    // Return the retrieved data (JSON response).
    return $data;
}
