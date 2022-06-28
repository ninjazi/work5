<?php
require '../db/connect.php';
session_start();
$chang_username = $_REQUEST['change_username'];
$chang_pass = $_REQUEST['change_password'];
$session_id = $_REQUEST['id_user'];

if (!empty($session_id)) {
    $user = R::load('users', $session_id);
    if (!password_verify($chang_pass, $user->pass)) {
        $user->pass = password_hash($chang_pass, PASSWORD_DEFAULT);
    }
    if (!empty($chang_username)) {
        $user->username = $chang_username;
        $_SESSION['username'] = $user->username;
    }
    R::store($user);
}
echo 'Ваши данные изменены';
header('refresh:3; url= http://work5/admin');
