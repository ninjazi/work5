<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work5 Login</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
    <div class="module">
        <h1>Вход</h1>
        <form class="form" action="handler/login_users.php" method="POST">
            <div class="alert alert-error"></div>
            <input type="text" placeholder="Ваш логин" name="login" required/>
            <input type="password" placeholder="Ваш пароль" name="password" autocomplete="new-password" required/>
            <input type="submit" value="Войти" name="sign_in" class="btn btn-block btn-primary"/>
        </form>
      Не зарегистрированы? нажмите <a href="register.php">сюда!</a>
    </div>
</div>
</body>
</html>
