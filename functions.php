<?php

/**
 * Подключиться к базе данных.
 *
 * @return object
 */
function connect_db () {

  $link = mysqli_connect('127.0.0.1', 'root', '', 'durdyev');
  mysqli_set_charset($link, 'utf8');

  if (!$link) {

  print('Ошибка подключения:' . mysqli_connect_error());
  die();
  }

  return $link;
}

/**
 * Получить данные из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $request SQL запрос
 *
 * @return array
 */
function db_run_query ($con, $request) {

  $result = mysqli_query($con, $request);

  if (!$result) {
    $error = mysqli_error($con);
    print("Ошибка MySQL:" . $error);
    die();
  } else {
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  return $result;
}

/**
 * Отфильтровать строку от HTML тегов.
 *
 * @param string $str Данные введенные пользователем в поле формы
 *
 * @return string
 */
function esc($str) {

  $text = strip_tags($str);

  return $text;
}

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * Добавить клиента в базу данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $email Емейл пользователя
 * @param string $name Имя пользователя
 *
 * @return object|false
 */
function db_insert_customer ($con, $email, $name) {

  $filtered_email = mysqli_real_escape_string($con, $email);
  $filtered_name = mysqli_real_escape_string($con, $name);
  $sql = "
    INSERT INTO customers SET
    email = '$filtered_email',
    name = '$filtered_name';";
  $res = mysqli_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

/**
 * Получить массив емейлов пользователей  из базы данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 *
 * @return array
 */
function get_customers_emails ($con) {

  $sql_emails = "SELECT email FROM customers";
  $result = db_run_query($con, $sql_emails);
  return $result;
}

/**
 * Найти пользователя по e-mail в базе данных.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $email e-mail пользователя
 *
 * @return array|false
 */
function find_customer_by_email ($con, $email) {

  $filtered_email = mysqli_real_escape_string($con, $email);
  $sql_find_email = "
    SELECT * FROM customers WHERE email = '$filtered_email';";
  $customer = db_run_query($con, $sql_find_email);

  if (count($customer)) {
    return $customer[0];
  } 
  return false;
}

/**
 * Найти участника по емейлу в базе данных.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $email e-mail участника
 *
 * @return array|false
 */

function find_participant_by_email ($con, $email) {

  $filtered_email = mysqli_real_escape_string($con, $email);
  $sql_find_email = "
    SELECT * FROM participants WHERE email = '$filtered_email';";
  $participant = db_run_query($con, $sql_find_email);

  if (count($participant)) {
    return $participant[0];
  } 
  return false;
}

/**
 * Добавить клиента в базу данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $email Емейл пользователя
 * @param string $name Имя пользователя
 *
 * @return object|false
 */
function db_insert_participant ($con, $email, $name) {

  $filtered_email = mysqli_real_escape_string($con, $email);
  $filtered_name = mysqli_real_escape_string($con, $name);
  $sql = "
    INSERT INTO participants SET
    email = '$filtered_email',
    name = '$filtered_name';";
  $res = mysqli_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

/**
 * Добавить клиента в базу данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 * 
 * @return object|false
 */
function db_get_customers ($con) {

  $sql = "
    SELECT * FROM customers ORDER BY id ASC;";
    
  $res = db_run_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

/**
 * Добавить клиента в базу данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 * 
 * @return object|false
 */
function db_get_participants ($con) {

  $sql = "
    SELECT * FROM participants ORDER BY id ASC;";
    
  $res = db_run_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

