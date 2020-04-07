<?php

require_once('init.php');

// путь на файл с настройками почтового сервера

$values = [];
$errors = [];
$title = 'Выход из кризиса';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// проверяем валидность полей

    // валидность поля имени

    if (isset($_POST['name'])) {

        $values['name'] = trim($_POST['name']);

        if ($values['name'] === '') {
            
            $errors['name'] = 'Введите свое имя';
        }
    }

    // валидность адреса электронной почты

    if (isset($_POST['email'])) {

    	$values['email'] = trim($_POST['email']);

    	if ($values['email'] === '') {

    		$errors['email'] = 'Введите адрес электронной почты';
    	}

    	if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
            
            $errors['email'] = 'Некорректно введен адрес электронной почты';
    	}
    }

    if (count($errors) === 0) {

        // данные из формы клиента

        $participant_name = $values['name'];
        $email = $values['email'];

        require_once('send-link_settings.php');
    	
        if (!find_participant_by_email($link, $email)) {

    	    $res = db_insert_participant($link, $values['email'], $values['name']);
        }

        // готовим отправку письма для клиента

        $messageToClient = (new Swift_Message("Выход из кризиса"))
          ->setFrom([$from => $from])
          ->setTo([$email => $name])
          ->setBody($clientText, 'text/html')
        ;

        // отправляем письмо администратору сайта и записываем результат в переменную $result
        $result = $mailer->send($messageToAdmin);

        // отправляем письмо клиенту
        $mailer->send($messageToClient);

        if($result !== 1) { // если письмо не было отправлено
            
            $errors['sendmail'] = 'К сожалению не удалось отправить Вашу заявку. Попробуйте заполнить форму еще раз через несколько минут.';
        } 
        
        $admin_message = include_template('linksent.php', [
            'errors' => $errors]);
    }

    if (count($errors) > 0) {

        $admin_message = include_template('link-not-sent.php', [
            'errors' => $errors]);
    }

    print($admin_message);
}
