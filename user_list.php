<?php
session_start();
$user_list = [
    ['login' => 'Irina', 'password' => password_hash(123,PASSWORD_DEFAULT)],
    ['login' => 'Tanya', 'password' => password_hash(123,PASSWORD_DEFAULT)],
    ['login' => 'Lena', 'password' => password_hash(456,PASSWORD_DEFAULT)],
];