<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <link rel="stylesheet" type="text/css" href="style/forgetpass_style.css">
</head>


<body>
        <div class="forgetpass-box">
        <h1>Please enter your email</h1>
        <form action="../controller/forgotpass_handle.php" method="post">
		<form method="post">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
			<input type="submit" value="Reset">
        </form>
        <p><a href="login.php">Login</a></p>
		
    </div>
</body>
</html>