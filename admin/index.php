<?php
session_start();
define('ADMINlogin','admin');
define('ADMINpassword','admin');

if (isset($_SESSION['login']) and isset($_SESSION['password']))
{
    header('Location: admin.php'); die;
}

if (isset($_POST['send']))
{
    if ($_POST['login'] == ADMINlogin and $_POST['password'] == ADMINpassword)
    {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['message'] = 'Авторизация выполнена успешно';
        header('Location: admin.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: index.php');
        die;
    }
}


require_once '../views/login.php';
