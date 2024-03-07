<?php
// Import PHPMailer classes into the global namespace.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

/**
 * This function used to send email to given recipient with given subject and message.
 *
 * @param  string $recipientEmail
 *  Recipient's email address.
 * @param  string $recipientName
 *  Recipient's name.
 * @param  string $subject
 *  Email subject.
 * @param  string $message
 *  Main message to send in email.
 *
 * @return void
 */
function send_email (string $recipientEmail, string $recipientName, string $subject, string $message): void {
  require_once "Creds.php";
  $mail = new PHPMailer(true);
  try {
    // Server settings.
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $senderEmail;
    $mail->Password = $senderPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender.
    $mail->setFrom($senderEmail, 'Koustav');
    // Add a recipient.
    $mail->addAddress($recipientEmail, $recipientName);
    $mail->addReplyTo($senderEmail, 'Koustav');

    $mail->isHTML(true);
    // Set email subject.
    $mail->Subject = $subject;
    // Set email message.
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // Print summary.
    echo "Mail has been successfully sent !!";
  } 
  catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
