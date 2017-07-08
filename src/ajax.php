<?php
if (isset($_POST['email'])) {
  // validate the email address first
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  // process the form only if the email is valid
  if ($email) {
    //$to = 'bentleybeacher@hotmail.com'; // where you want to send the mail
    $to = "webmaster@marketknowledgecapital.com";
    $from = $email; // a valid address on your domain
    $subject = 'Email address from website';
    $message = 'From: webmaster@marketknowledgecapital.com' . "\r\n\r\n";
    $message .= 'A user has sent their email address from the webmaster@marketknowledgecapital.com website.' . "\r\n\r\n";
    $message .= 'Email address is ' . $email;
    $headers = "From: $from\r\nReply-to: $email";
    $sent = mail($to, $subject, $message, $headers);
    if ($sent) {
        $result = '{"success": true}';
    }
    else{
      $result = '{"success": false}';
    }
  } else {
    $result = '{"success": false}';
  }
}

echo $result;

?>
