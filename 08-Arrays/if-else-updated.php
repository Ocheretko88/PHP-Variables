<?php


$users["1"] = ["name" => "Alevtyn", "email" => "alevtyn@gmail.com", "language" => "DE"];
$users["2"] = ["name" => "Andriy", "email" => "andriy@gmail.com", "language" => "EN"];
$users["3"] = ["name" => "Anton", "email" => "anton@gmail.com", "language" => "FR"];
$users["4"] = ["name" => "Askold", "email" => "askold@gmail.com", "language" => "UA"];
$users["5"] = ["name" => "Test", "email" => "test@test.com", "language" => "RU"];


$language["RU"] = "Привет!";
$language["EN"] = "Hello!";
$language["FR"] = "Bonjour!";
$language["UA"] = "Привіт!";
$language["DE"] = "Hallo!";


$userLast = end($users); // останній користувач
$userFirst = reset($users); // перший користувач


if($userLast["language"] === $userFirst["language"]){
    echo $language[$userLast["language"]];
}
else{
    echo $language[$userLast["language"]] . PHP_EOL . $language[$userFirst["language"]];
}



