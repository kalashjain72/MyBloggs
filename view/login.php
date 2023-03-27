<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style/login_style.css">
</head>
<body>
	<div class="login-box">
		<h1>Login</h1>
		<form action="../controller/login_handle.php" method="post">

			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login">
			
        </form>
		<a href="forgotpass.php">Forgot Password?</a>
        <p>New User? <a href="signup.php"> Create an account</a></p>
    </div>
</body>
</html>
