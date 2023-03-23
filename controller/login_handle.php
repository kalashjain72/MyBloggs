<?php
try {
    require_once("../model/connection.php");
} catch (error) {
    header("Location: ../view/login.php?message=error_in_database");
}
require_once("../model/User.php");
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];



    $user = new User($email, $password, $conn,$first_name,$last_name,$mobile_number);
    $user->user_exists();
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