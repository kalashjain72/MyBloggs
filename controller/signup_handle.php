<?php
try {
    require_once("../model/connection.php");
} catch (error) {
    header("Location: ../view/signup.php?error=cant_connect_to_data_base");
}

require_once("../model/User.php");
if (isset($_POST["email"]) && isset($_POST["newPassword"])) {
    $email = $_POST["email"];
    $password = $_POST["newPassword"];
    $first_name=$_POST["FirstName"];
    $last_name=$_POST["LastName"];
    $mobile_number=$_POST["phone"];

    $user = new User($email, $password, $conn,$first_name,$last_name,$mobile_number);
   // $user->user_exists();
    if ($user->user_exists()) {
        header("Location: ../view/signup.php?message=user_already_exists_please_login");
        exit();
    } else {
        
        //$user->create_user();
        if ($user->create_user()) {
            header("Location: ../view/login.php?message=user_created_successfully_now_you_can_login");
        } else {
            header("Location: ../view/signup.php?message=user_not_created_try_again");
        }
        exit();
    }

} 

?>