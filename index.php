<?php

require 'vendor/autoload.php';

$transport = (new Swift_SmtpTransport('mail.roshdana.i-gh.ir', 587))
    ->setUsername('info@roshdana.i-gh.ir')
    ->setPassword('ZPMR@YHFs}z&');

$mailer = new Swift_Mailer($transport);



//$message = new Swift_Message('Wonderful Subject');
//$message->setFrom(['john@doe.com' => 'John Doe']);
//$message->setTo(['receiver@domain.org', 'other@domain.org' => 'A name']);
//$message->setBody('Here is the message itself');

$message = (new Swift_Message('ُSalam From Roshdana'))
    ->setFrom(['info@roshdana.i-gh.ir' => 'Roshdana'])
    ->setTo(['ghasrfakhri@gmail.com'])
    ->setBody('Matne Payam');


if($mailer->send($message) > 0 ){
    echo "Sent.";
}