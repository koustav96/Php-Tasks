<?php
    require_once 'email_process.php';
    if (isset($_POST['submit'])) {
        // Function call to send email.
        send_email($_POST['email'], $_POST['fullName'], $_POST['subject'], $_POST['message']);
}
