<?php
$users = [
    2 => ['name' => 'Cavan Dotson', 'email' => 'cavan@gmail.com'],
    3 => ['name' => 'Khadija Sutherland', 'email' => 'khadija@gmail.com'],
    5 => ['name' => 'Iyla Pacheco', 'email' => 'iyla@gmail.com'],
    10 => ['name' => 'Mahir Willis', 'email' => 'mahir@gmail.com'],
    11 => ['name' => 'Summer Mcdougall', 'email' => 'summer@gmail.com'],
    132 => ['name' => 'Ahmed Pollard', 'email' => 'ahmed@gmail.com'],
];

echo 'Total users: ' . count($users) . PHP_EOL . PHP_EOL;
krsort($users);
echo 'Sorted array: ' . PHP_EOL;
var_export($users);
echo PHP_EOL . '-----------------------------' . PHP_EOL;
$minId = end($users);
$almostMinId = prev($users);

$maxId = reset($users);
$almostMaxId = next($users);

var_export(compact('minId',  'almostMinId', 'maxId', 'almostMaxId'));
echo PHP_EOL;

$minIndex = array_search($minId, $users, true);
unset($users[$minIndex]);

var_export($users);

unset($array[min(array_keys($array))]);
