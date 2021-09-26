<?php


session_start();
require_once 'html-form.php';
$_SESSION =[];


?>
<p>
    Щоб побачити свій вибір після перезавантаження сторінки,
    <a href="#<?php echo htmlspecialchars(SID); ?>"> тицніть сюди</a>.
</p>

