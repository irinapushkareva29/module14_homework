<?php

// Возвращаем массив всех пользователей
function getUsersList()
{
    include 'user_list.php';
    return $user_list;
};

// Проверка существования пользователя
function existsUser($login)
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            return true;
        }
    }
    return false;
}

// Проверка на существование пользователя и правильность ввода пароля
function checkPassword($login, $password)
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            if (password_verify($password, $user['password'])) {
                return true;
            }
        }
    }
    return false;
}

// Возвращает имя вошедшего на сайт пользователя
function getCurrentUser()
{
    if (isset($_SESSION['currentUser']) && !empty($_SESSION['currentUser'])) {
        return $_SESSION['currentUser'];
    } else return null;
}
