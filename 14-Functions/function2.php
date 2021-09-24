<?php


function loginPasswordCheck(){
    $login = 'Jora';
    $password = 'Jora111';
    $sourceFile = 'loginPassword.json';
    if (($json = file_get_contents($sourceFile)) === false) {
        echo 'Не відкрився  json файл';
        die('Помилка читання файлу');
    }
    try {
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        $data = [];
    }
    //var_export($data);
        if (in_array($login, $data, true) && in_array($password, $data, true)) {
            echo "Велкам бек, $login";
        }else{
            echo "Bad news, Huston! Такий користувач не знайдений";
        }
        // не працює, поки не розумію чому
}
loginPasswordCheck();
