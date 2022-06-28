<?php
require '../db/connect.php';

function Email_list(): array
{
    $array = null;
    $i = 0;
    $users_dub = R::getAll('SELECT `email` FROM `users` GROUP BY `email` HAVING COUNT(*) > 1');
    foreach ($users_dub as $item) {
        $array['email'][$i] = $item['email'];
        $i++;
    }
    return $array;
}

function No_one_orders(): array
{
    $array = null;
    $i = 0;
    $users_id = R::findAll('users');
    foreach ($users_id as $user_id) {
        $orders_id = R::find('orders', 'user_id = ?', [$user_id['id']]);
        if (empty($orders_id)) {
            $array['user_login'][$i] = $user_id['login'];
            $i++;
        }
    }
    return $array;
}

function More_two_orders(): array
{
    $array = null;
    $i = 0;
    $users_id = R::findAll('users');
    foreach ($users_id as $user_id) {
        $count = 0;
        $orders_id = R::find('orders', 'user_id = ?', [$user_id['id']]);
        if (!empty($orders_id)) {
            foreach ($orders_id as $item) {
                if ($item['user_id'] == $user_id['id']) {
                    $count++;
                }
            }
        }
        if ($count > 2) {
            $array['user_login'][$i] = $user_id['login'];
            $i++;
        }
    }
    return $array;
}
