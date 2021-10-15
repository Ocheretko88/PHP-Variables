<?php
session_start();
require_once 'html/registrationForm.html';
require_once 'config.php';

if(isset($errorMsg)){
    foreach($errorMsg as $error){
        ?>
        <div class="alert alert-danger">
            <strong>WRONG! <?php echo $error;?></strong>
        </div>
        <?php
    }
}
if(isset($registerMsg)){
    ?>
    <div class="alert alert-success">
        <strong><?php echo $registerMsg;?></strong>
    </div>
<?php
}

if(isset($_REQUEST['btn_register'])){
    $username = strip_tags($_REQUEST["txt_username"]);
    $email = strip_tags($_REQUEST["txt_email"]);
    $password = strip_tags($_REQUEST["txt_password"]);

    if(empty($username)){
        $errorMsg[] = "Please enter your username";
    }
    else if(empty($email)){
        $errorMsg[] = "Please enter your email";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMsg[] = "Please enter a valid email address";
    }
    else if(empty($passowrd)){
        $errorMsg[] = "Please enter your password";
    }
    else if(strlen($password) < 6){
        $errorMsg[] = "Password must be at least 6 characters";
    }
    else{
        try{
            $select_stmt = $pdo->prepare("SELECT username, email FROM users WHERE username=:uname || email=:uemail");
            $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if($row["username"] === $username){
                $errorMsg[] = "Sorry, this username already exists";
            }
            else if($row["email"] === $email){
                $errorMsg[] = "Sorry, this email already exists";
            }
            else if(!isset($errorMsg)){
                $new_password = password_hash($password, PASSWORD_DEFAULT);

                $insert_stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (:uname, :uemail, :upassword)");

                if($insert_stmt->execute(array(':uname' => $username, ':uemail' => $email, ':upassword' => $new_password))){
                    $registerMsg = "Registration is successful. Click to Log in";
                }
            }
        }
            catch(PDOException $e){
            echo $e->getMessage();
            }
    }
}
