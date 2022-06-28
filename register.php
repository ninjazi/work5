<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Work5 Register</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="body-content">
    <div class="module">
        <h1>Регистрация</h1>
        <form class="form" action="handler/register_users.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"></div>
            <input type="text" placeholder="Введите ваше ФИО" name="username" required />
            <input type="email" placeholder="Ваш Email" name="email" required />
            <input type="text" placeholder="Введите логин" name="login" required />
            <input type="password" placeholder="Введите пароль" name="password" autocomplete="new-password" required />
            <input type="submit" value="Зарегистрироваться" name="register" class="btn btn-block btn-primary" />
        </form>
        Уже зарегистрировались? нажмите <a href="/">сюда!</a>
    </div>
</div>
</body>
</html>
