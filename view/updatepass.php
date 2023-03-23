<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="style/updatepass_style.css">
</head>
<body>

<div class="updatepass-box">
<h1>Enter New Password</h1>
 <form action=" ../model/updatepass_handle.php" method="post" style="text-align:center">
         
        <label for="email">New Password:</label>
        <input type="password" name="new" id="new"> </br>
        <label for="email">Confirm Password:</label>
        <input type="password" name="confirm" id="confirm"> </br>

        <input type="submit" value="Reset Password" /> 
        <p><a href="login.php">Login</a></p>

 </form>
</body>
</html>
