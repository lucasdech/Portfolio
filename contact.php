<?php 


$headers = 'From:'. $_POST['mail'] . "\r\n" .

mail('<lucasdechavanne22@gmail.com>', 'the subject', 'the message', $headers,
  '-fwebmaster@example.com');
