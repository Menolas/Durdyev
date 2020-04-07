<?php

require('init.php');

$title = 'Выход из кризиса';

$page_content = include_template('admin.php', [
    'title' => $title]);

$layout_content = include_template('layout.php', [
    'page_content' => $page_content,
    'title' => $title]);

print($page_content);
