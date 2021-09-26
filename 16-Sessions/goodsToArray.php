<?php

/**
 * @param string $sourceFile
 * @return array|null
 * @throws Exception
 */
function GoodsToArray(string $sourceFile): array
{
    if (!file_exists($sourceFile)) {
        throw new Exception("Файл '$sourceFile' не існує");
    }

    $json = file_get_contents($sourceFile);
    if ($json === false) {
        throw new Exception("Неможливо отримати вміст файлу: $sourceFile");
    }

    try {
        $goods = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (Exception $e) {
        throw new Exception('Помилка обробки json');
    }

    return $goods;
}
try {
    $goods = GoodsToArray('goods.json');
   // var_export($goods);
} catch (Exception $e) {
    echo $e->getMessage();
}

