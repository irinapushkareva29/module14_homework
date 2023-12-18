<?php
session_start();
include 'functions.php';

$login_enter = $_POST['login'];
$password_enter = $_POST['password'];

if ($_POST['login'] !== '' && $_POST['password'] !== '') {

    if (checkPassword($login_enter, $password_enter)) {
        $_SESSION['authorized'] = true;
        $_SESSION['currentUser'] = $login_enter;
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Неправильно введены логин или пароль.';
        header('Location: login.php');
    }
}
else {
    $_SESSION['message'] = 'Не введены логин или пароль.';
    header('Location: login.php');
}