<?php
require 'print_data.php';
// Check if the form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data.
    $full_name = $_POST["f_name"] . ' ' . $_POST["l_name"];
    /**
     * Print data.
     */
    show_data($full_name);
}
