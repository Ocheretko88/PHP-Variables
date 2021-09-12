<?php


$users["1"] = ["name" => "Alevtyn", "email" => "alevtyn@gmail.com", "language" => "RU"];
$users["2"] = ["name" => "Andriy", "email" => "andriy@gmail.com", "language" => "EN"];
$users["3"] = ["name" => "Anton", "email" => "anton@gmail.com", "language" => "FR"];
$users["4"] = ["name" => "Askold", "email" => "askold@gmail.com", "language" => "UA"];
$users["5"] = ["name" => "Test", "email" => "test@test.com", "language" => "DE"];



$languagesCompare1 = end($users); // останній користувач
$languagesCompare2 = reset($users); // перший користувач
// $diff = array_intersect($languagesCompare2, $languagesCompare1);

if($languagesCompare2 === $languagesCompare1){
    echo "Привет!";
}
else{
    echo "Привет! " . "Hallo!";
}




