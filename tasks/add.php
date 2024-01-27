<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/www/bez/config/config.php');
include_once(BASE_PATH . '/includes/header.php');
// проверка
if($_SESSION['user_role']=='1'){
    $_SESSION['failure'] = "У вас не хватает прав для совершения этого действия";
    header('location: index.php');
    exit;
}
// РЕДАКТОР ФОТО
require_once BASE_PATH . '/classes/PhotoEditor.php';
// ПЕРЕМЕННЫЕ
$GLOBALS['edit'] = false;
$GLOBALS['add'] = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ПОЛУЧЕНИЕ ДАННЫХ ИЗ ПОСТ ЗАПРОСА ФОРМЫ
    $data_to_parse = array_filter($_POST);
    
    require_once BASE_PATH . '/classes/PDOclass.php';
    $PDOclass = new PDOclass();
    $PDOclass->SetTask($data_to_parse);
    exit();
}
// ГЕНЕРАЦИЯ ФОРМЫ (ЗАГОЛОВОК, КЛАСС, ИМЯ ФОРМЫ)
form_generator("Новая задача", "form", "task");
?>