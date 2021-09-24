<?php
function jsonToArray(){
    $data = [];

    $sourceFile = 'loginPassword.json';
    if (($json = file_get_contents($sourceFile)) === false) {
        die('Помилка читання файлу');
    }
try {
    $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
        $data = [];
}
try {
    $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
        $data = [];
}
   var_export($data[0]['login']);

}
jsonToArray();

