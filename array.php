<?php

$users["1"] = ["name" => "Alevtyn", "email" => "alevtyn@gmail.com"];
$users["2"] = ["name" => "Andriy", "email" => "andriy@gmail.com"];
$users["3"] = ["name" => "Anton", "email" => "anton@gmail.com"];
$users["4"] = ["name" => "Askold", "email" => "askold@gmail.com"];
$users["5"] = ["name" => "Test", "email" => "test@test.com"];

echo "Всього користувачів:" . count($users);
ksort($users);
krsort($users);

end($users);
reset($users);
next($users);
current($users);
array_shift($users);

var_export($users);
