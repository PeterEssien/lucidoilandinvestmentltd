<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
$subject = "New contact form request";
$message = $_POST['message'];
  $headers = 'From: info@website.com' . "\r\n" .
             'Reply-To: ' . $_POST['email']. "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail('essienpeter57@gmail.com', $subject, $message, $headers);

  die('Thank you for your email');
}
