<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Вход в личный кабинет</p>
    <form action="regisration.php" method="post">
        <input name="login" type="text" placeholder="Логин">
        <p><input name="password" type="password" placeholder="Пароль"></p>
        <button name="submit" type="submit">Войти</button>
    </form>
</body>
</html>