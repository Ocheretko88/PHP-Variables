
<!DOCTYPE>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: pink;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: floralwhite;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f4f0f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #e81ecd;
            color: black;
            padding: 16px 30px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.7;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
    <title></title>
</head>
<body>

<form action="#" method="post">
    <div class="container">
        <h1>Реєстрація єдинорогів</h1>
        <p>Введіть свої дані, якщо Ви справжній єдинорог</p>
        <hr>

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

    <div class="container signin">
        <p>Ви вже зареєстровані? <a href="#">Вам сюди</a>.</p>
    </div>
</form>
<?php

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
if ($login === null || $password === null) {
    die('Логин или пароль не введен.');
}
if (!file_exists('data.txt')) {
    die('Файл не существует.');
}

$usersResourceFile = fopen('data.txt', 'rb');
if (!$usersResourceFile) {
    die('Ошибка чтения файла');
}
$isLoggedIn = false;
while (($userEntity = fgets($usersResourceFile,)) !== false) {
    [$loginFromFile, $passwordFromFile] = array_map('trim', explode(" ", $userEntity));
    if ($login === $loginFromFile && $password === $passwordFromFile) {
        $isLoggedIn = true;
        break;
    }
}
fclose($usersResourceFile);
if (!$isLoggedIn) {
    die('Привет, гость!');
}
echo "Привет, $login";
$logContent = sprintf('%s успешно зашел в систему в %s', $login, date('Y-m-d H:i:s'));
file_put_contents('logs.txt', $logContent, FILE_APPEND);

if (!empty($loginPassword)) {
    var_export($loginPassword);
}
?>
</body>
</html>
