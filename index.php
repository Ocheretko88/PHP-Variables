
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

<?php
$name = "Ваше справжнє імя єдинорога";
$email = "А ось тут напишіть свій імейл";
$pswd = "Ось тут впишіть свій пароль";
?>

<form action="/action_page.php" method="post">
    <div class="container">
        <h1>Реєстрація єдинорогів</h1>
        <p>Введіть свої дані, якщо Ви справжній єдинорог</p>
        <hr>

        <label for="name"><b>Ім'я</b></label>
        <label>
            <input type="text" value="<?php echo $name; ?>" name="name" required>
        </label>

        <label for="email"><b>Імейл</b></label>
        <label>
            <input type="text" value="<?php echo $email; ?>" name="email" required>
        </label>

        <label for="psw"><b>Пароль</b></label>
        <label>
            <input type="password" value="<?php echo $pswd; ?>" name="psw" required>
        </label>

        <label for="psw-repeat"><b>Введіть ще раз пароль</b></label>
        <label>
            <input type="password" value="<?php echo $pswd; ?>" name="psw-repeat" required>
        </label>
        <hr>
        <p>Ви приєднуєтусь до світу єдинорогів, тому прочитайте, будь ласка, <a href="#">Правила</a>.</p>

        <button type="submit" class="registerbtn">Зареєструватися</button>
    </div>

    <div class="container signin">
        <p>Ви вже зареєстровані? <a href="#">Вам сюди</a>.</p>
    </div>
</form>

</body>
</html>



