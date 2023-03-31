<?php
require_once("../vendor/autoload.php");
use Model\User;

if (isset($_POST["email"]) && isset($_POST["newPassword"])) {
    
    $user = new User($_POST);
    
    if ($user->user_exists()) {
        header("Location: ../view/signup.php?message=user_already_exists_please_login");
        exit();
    } else {
        
        if ($user->create_user()) {
            header("Location: ../view/login.php?message=user_created_successfully_now_you_can_login");
        } else {
            header("Location: ../view/signup.php?message=user_not_created_try_again");
        }
        exit();
    }

} 

?>