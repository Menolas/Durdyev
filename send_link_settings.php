<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
  ->setUsername('dobyshevaelena727@gmail.com')
  ->setPassword('r512lock')
  ->setEncryption('SSL')
;

$video_link = include_template('link.php', [
  'participant_name' => $participant_name]);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// адрес администратора, который получит заявку с сайта

$to = ['dobyshevaelena727@gmail.com' => 'ADMIN'];

// почтовый ящик, с помощью которого отсылаем почту

$from = 'dobyshevaelena727@gmail.com';

// формируем тело письма для отправки админу сайта

$adminText = <<<MESS
<b>Имя клиента</b>:{$participant_name}<br>
<b>E-mail</b>: {$email}<br>
MESS;

// формируем тело письма для отправки клиенту, что его заявка получена
$clientText = <<<MESS
{$video_link}
MESS;

// готовим отправку письма для администратора сайта
$messageToAdmin = (new Swift_Message("Выслана ссылка на видео курс 'Выход из кризиса'"))
  ->setFrom([$from => $from])
  ->setTo($to)
  ->setBody($adminText, 'text/html');
 