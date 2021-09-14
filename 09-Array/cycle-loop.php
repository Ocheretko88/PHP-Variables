<?php

$users["1"] = ["name" => "Alevtyn", "email" => "alevtyn@gmail.com", "language" => "UA"];
$users["2"] = ["name" => "Andriy", "email" => "andriy@gmail.com", "language" => "EN"];
$users["3"] = ["name" => "Anton", "email" => "anton@gmail.com", "language" => "FR"];
$users["4"] = ["name" => "Askold", "email" => "askold@gmail.com", "language" => "UA"];
$users["5"] = ["name" => "Askold", "email" => "test@test.com", "language" => "RU"];


$language["RU"] = "Привет!";
$language["EN"] = "Hello!";
$language["FR"] = "Bonjour!";
$language["UA"] = "Привіт!";
$language["DE"] = "Hallo!";


$userLast = end($users); // останній користувач
$userFirst = reset($users); // перший користувач

//if($userLast["language"] === $userFirst["language"]){
//    echo $language[$userLast["language"]];
//}
//else{
//    echo $language[$userLast["language"]] . PHP_EOL . $language[$userFirst["language"]];
//}
// Задача №1:
foreach ($users as $user){
    $name = $user["name"];

    if(!isset($namesCounter[$name])){
        $namesCounter[$name] = 0;
    }else {
        $namesCounter[$name] += 1;
    }

}
foreach ($namesCounter as $name => $userQ){
    if($userQ > 0){
        echo $name;
        echo ' - ';
        echo $userQ+1;
    }
}
// Задача №2:
foreach ($users as $user){
    $language = $user["language"];
    $usersL[$language][] = $user;
}

print_r($usersL);

// Задача №3:
for($i = count($users); $i >= 1; $i -= 1) {
    $newUsers[] = $users[$i];
}
print_r($newUsers);
