<?php
require 'print_data.php';
// Check if the form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data.
    $full_name = $_POST["f_name"] . ' ' . $_POST["l_name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $image = $target_file;
    $phoneNumber = $_POST["phone_number"];
    $emailId = $_POST["email_id"];
    $marksText = $_POST["subject_marks"];
    /**
     * Print data.
     */
    show_data($full_name, $emailId, $phoneNumber, $image, $marksText);
}
