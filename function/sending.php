<?php
     $to      = 'thom.kyu@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: thom.kyu@gmail.com' . "\r\n" .
     'Reply-To: thom.kyu@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>