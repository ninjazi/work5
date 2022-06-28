<?php
require '../db/connect.php';

$username = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$login = $_REQUEST['login'];
$email = $_REQUEST['email'];

// Никакие таблицы создавать не нужно, все нужные таблицы и поля будут созданы сами!
if (!empty($login)) {
    $users = R::dispense('users');
    $users->email = $email;
    $users->username = $username;
    $users->login = $login;
    $users->pass = password_hash($pass, PASSWORD_DEFAULT);
    R::store($users);
    echo '<p>Вы успешно зарегистрированы! Сейчас вы будете перенаправлены на страницу входа</p>';
    header('refresh:3; url= http://work5');
}
