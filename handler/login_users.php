<?php
require '../db/connect.php';

$pass = $_REQUEST['password'];
$login = $_REQUEST['login'];

if (!empty($login)) {
    $user = R::findOne('users', 'login = ?', [$login]);
    if (password_verify($pass, $user['pass'])) {
        session_start();
        $_SESSION['username'] = $user->username;
        $_SESSION['id'] = $user->id;
        header('Location: http://work5/admin');
    }
    else {
        echo 'Пароль введен неправильно';
        header('refresh:3; url= http://work5');
    }
}
else
    header('Location: http://work5');

