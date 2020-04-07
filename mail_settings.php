<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465))
  ->setUsername('dobyshevaelena727@gmail.com')
  ->setPassword('r512lock')
  ->setEncryption('SSL')
;

$message_1 = include_template('message_1.php', [
  'customer_name' => $customer_name]);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// адрес администратора, который получит заявку с сайта

$to = ['dobyshevaelena727@gmail.com' => 'ADMIN'];

// почтовый ящик, с помощью которого отсылаем почту

$from = 'dobyshevaelena727@gmail.com';

// формируем тело письма для отправки админу сайта

$adminText = <<<MESS
<b>Имя клиента</b>:{$customer_name}<br>
<b>E-mail</b>: {$email}<br>
MESS;

// формируем тело письма для отправки клиенту, что его заявка получена
$clientText = <<<MESS
{$message_1}
MESS;

// готовим отправку письма для администратора сайта
$messageToAdmin = (new Swift_Message("Высланы реквизиты оплаты видео курса 'Выход из кризиса'"))
  ->setFrom([$from => $from])
  ->setTo($to)
  ->setBody($adminText, 'text/html');

  /*<b>{$name}</b>, Ваша заявка принята в работу<br>
Ожидайте письмо на e-mail: <b>{$email}</b><br>*/
