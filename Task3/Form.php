<?php
require 'print_data.php';
// Check if the form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data.
    $full_name = $_POST["f_name"] . ' ' . $_POST["l_name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $marksText = $_POST["subject_marks"];
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $image = $target_file;
    /**
     * Print data.
     */
    show_data($full_name, $image, $marksText);
}
