<?php
$dsn = 'mysql:dbname=beetroot;host=localhost';
$user = 'root';
$password = 'beetroot';



try {
    $pdo = new PDO('mysql:host=db;port=3306;dbname=beetroot', 'root', 'beetroot');
    $pdo->exec('select 1');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo 'mysql: pong';
} catch (Throwable $e) {
    print "Error!: {$e->getMessage()} <br/>";
}
