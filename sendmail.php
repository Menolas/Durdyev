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
    } else {

        $errors['name'] = 'Введите свое имя';
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
    } else {

        $errors['email'] = 'Введите адрес электронной почты';
    }

    // проверка чекнут ли чекбокс согласия на обработку данных

    if(!isset($_POST['accept'])) {

        $errors['accept'] = 'Согласитесь на обработку данных';
    }
    
    if (count($errors) === 0) {

        // данные из формы клиента
        $customer_name = $values['name'];
        $email = $values['email'];

        require_once('mail_settings.php');
    	
        if (!find_customer_by_email ($link, $email)) {

    	    $res = db_insert_customer($link, $values['email'], $values['name']);
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

            print($errors['sendmail']);

        } else {
            
            $page_content = include_template('mailsent.php', [
                'errors' => $errors,
                'values' => $values]);

            $layout_content = include_template('layout.php', [
                'page_content' => $page_content,
                'errors' => $errors,
                'title' => $title]);

            print($layout_content);
        }
    } else {

        $page_content = include_template('index.php', [
            'errors' => $errors,
            'values' => $values]);

        $layout_content = include_template('layout.php', [
            'page_content' => $page_content,
            'errors' => $errors,
            'title' => $title]);

        print($layout_content);
    }
}
