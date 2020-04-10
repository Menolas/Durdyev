<?php

require('init.php');

$title = 'Админ страничка';
$customers = db_get_customers($link);
$participants = db_get_participants($link);

$page_content = include_template('admin.php', [
    'title' => $title,
    'customers' => $customers,
    'participants' => $participants]);

print($page_content);
