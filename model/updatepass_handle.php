<?php
try {
    require_once("../model/connection.php");
} catch (error) {
    header("Location: ../view/login.php?message=error_in_database");
}
?>

<?php
if (isset($_POST["confirm"])) {
    $confirm=$_POST["confirm"];
    $email=$_GET["email"];

        $sql = "UPDATE users SET password ='$confirm' WHERE Email='$email'";
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../view/login.php?message=Sucessfull");
                    return true;
        } else {
            header("Location: ../view/login.php?message=error_in_database");
            return false;
    }
}
?>