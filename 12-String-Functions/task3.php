<!DOCTYPE>
<html lang="">
<body>
<form action="#" method="post">
    <div class="container">
        <label for="name"><b>Логін</b></label>
        <label>
            <input type="text" name="login" required autofocus>
        </label>

        <label for="psw"><b>Пароль</b></label>
        <label>
            <input type="password" name="password" required>
        </label>
        <button type="submit" class="registerbtn">Зареєструватися</button>
    </div>
</form>



<?php
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
if ($login === null || $password === null) {
    die('Введіть логін та пароль.');
}
    if(strlen($password) > 7 && strlen($password) < 12){
        echo 'Пароль підходть';
    }else{
        echo 'Пароль не подіходить';
    }
?>
</body>
