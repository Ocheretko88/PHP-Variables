<div style="text-align: center;">
    <h2>

<?php
require_once 'config.php';
session_start();

if(!isset($_SESSION['user_login'])){
    header("location: login.php");
}

$id = $_SESSION['user_login'];

$select_stmt = $pdo->prepare("SELECT * FROM users WHERE user_id = :uid");
$select_stmt->execute(array(":uid=>$id"));

$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_SESSION['user_login'])){
    ?>
        Welcome,
        <?php
        echo $row['username'];
}
?>
    </h2>
</div>
