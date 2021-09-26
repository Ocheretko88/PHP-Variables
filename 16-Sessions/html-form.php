<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require ('goodsToArray.php');
try {
    $goods = GoodsToArray('goods.json');
    //var_export($goods);
} catch (Exception $e) {
    echo $e->getMessage();
}
$item1 = $goods[0]['name'] . PHP_EOL . $goods[0]['price'] . PHP_EOL . $goods[0]['quantity'];
$item2 = $goods[1]['name'] . PHP_EOL . $goods[1]['price'] . PHP_EOL . $goods[1]['quantity'];
$item3 = $goods[2]['name']. PHP_EOL . $goods[2]['price']. PHP_EOL . $goods[2]['quantity'];
?>
<form method='post' id='userform' action='#'>
    Оберіть товар
    <hr>
        <label><?php
            echo $item1?>
            <input type='checkbox' name= 'checkboxvar' value= "<?php
            echo $item1?>">
        </label>1<br>
        <label><?php
            echo $item2?>
            <input type='checkbox' name='checkboxvar' value="<?php
            echo $item2?>">
        </label>2<br>
        <label><?php
            echo $item3?>
            <input type='checkbox' name='checkboxvar' value="<?php
            echo $item3?>">
        </label>3
    <hr>
       <input type='submit' class='buttons' value=" В корзину"> </form>
<hr>
<?php
if (isset($_POST['checkboxvar'])) {
    var_export($_POST['checkboxvar']);
}
?>
</body>
</html>
