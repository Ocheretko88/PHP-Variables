<?php

/**
 * @throws JsonException
 */
function jsonToCSV($sourceFile, $destinationFile)
{
    if (($json = file_get_contents($sourceFile)) === false) {
        die('Помилка читання файлу');
    }
    $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    $fp = fopen($destinationFile, 'wb');
    $header = false;
    foreach ($data as $row) {
        if (empty($header)) {
            $header = array_keys($row);
            fputcsv($fp, $header);
            $header = array_flip($header);
        }
        fputcsv($fp, array_merge($header, $row));
    }
    fclose($fp);
}
$json_filename = 'oscar_age_female.json';
$csv_filename = 'oscar_age_female.csv';
try {
    jsonToCSV($json_filename, $csv_filename);
} catch (JsonException $e) {
}
echo 'У нас вдалося! <a href="'
 . $csv_filename . '" target="_blank">Переходь по лінку та дивись таблицю.</a>';
