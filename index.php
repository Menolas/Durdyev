<?php

require('init.php');

$title = 'Выход из кризиса';

$page_content = include_template('index.php', [
    'title' => $title]);

$layout_content = include_template('layout.php', [
    'page_content' => $page_content,
    'title' => $title]);

print($layout_content);
