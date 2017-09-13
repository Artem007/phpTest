<?php

// $emailTo="melnykartem10@gmail.com";
// $subject="Test";
// $body="Testing mail php function";
// $headers="From:example@example.com";
//
// if(mail($emailTo,$subject,$body,$headers)){
//   echo "Emal has been sent";
// }else{
//   echo "Not sent";
// }

$to      = 'melnykartem10@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
  echo 'mail send succsesfly';
}else{
  echo 'not send';
}

?>

<!--
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="get">
      <input type="text" name="name">
      <input type="text" name="lastName">
      <input type="text" name="Age">

      <button type="submit">Confirm</button>
    </form>

  </body>
</html> -->
