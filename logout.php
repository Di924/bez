<?php
require_once './config/config.php';
session_start();
session_destroy();
session_start();
$_SESSION['user_logged_in'] = FALSE;
header('Location:/www/bez/');
exit;

 ?>