<?php
require_once("../vendor/autoload.php");
use Model\User;

if (isset($_POST["email"]) && isset($_POST["newPassword"])) {
    
    $user = new User($_POST);
    if ($user->user_exists()) {
        if ($user->check_password()) {
            header("Location: ../index.php");
        } else {
            header("Location: ../view/login.php?message=wrong_password!!");
        }
        exit();
    } else {
        header("Location: ../view/login.php?message=user_does_not_exists_please_register");
        exit();
    }
} else {
    header("Location: ../view/signup.php?messsage=fill_all_the_fields");
}


?>