<?php
session_start();
require_once 'html/loginForm.html';

if(isset($errorMsg)){
    foreach($errorMsg as $error){
        ?>
        <div class="alert alert-danger">
            <strong><?php echo $error;?></strong>
        </div>
<?php
    }
}
if(isset($loginMsg)){
?>
<div class="alert alert-success">
    <strong><?php echo $loginMsg;?></strong>
</div>
<?php
}

require_once 'config.php';

if(isset($_SESSION['user_login'])){
    header("location: welcome.php");
}
if(isset($_REQUEST['btn_login'])) {
    $username = strip_tags($_REQUEST["txt_username_email"]);
    $email = strip_tags($_REQUEST["txt_username_email"]);
    $password = strip_tags($_REQUEST["txt_username_password"]);

    if (empty($username)) {
        $errorMsg[] = "Please enter username or email";
    }
    if (empty($email)) {
        $errorMsg[] = "Please enter username or email";
    }
    if (empty($password)) {
        $errorMsg[] = "Please enter username or email";
    } else {
        try {
            $select_stmt = $pdo->prepare("SELECT * FROM users WHERE username=:uname OR email=:uemail");
            $select_stmt->execute([':uname' => $username, ':uemail' => $email]);
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if ($select_stmt->rowCount() > 0) {
                if ($username === $row["username"] || $email === $row["email"]) {
                    if (password_verify($password, $row["password"])) {
                        $_SESSION["user_login"] = $row["user_id"];
                        $loginMsg = "Successful Login";
                        header("refresh:2; welcome.php");
                    } else {
                        $errorMsg[] = "Wrong password";
                    }
                } else {
                    $errorMsg[] = "Wrong username or email";
                }
            } else {
                $errorMsg[] = "Wrong username or email";
            }
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
}
}
