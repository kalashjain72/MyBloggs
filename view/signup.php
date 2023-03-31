<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style/signup_style.css">
</head>

<body>
  <div class=sign-box>
    <h1>Sign-up</h1>
    
    <form action="../controller/signup_handle.php" method="post">

      <label for="FirstName">First Name</label>
      <input type="text" name="FirstName" required>
      <label for="LastName">Last Name</label>
      <input type="text" name="LastName" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="newPassword" name="newPassword" required>
      <label for="password">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <label for="number">Mobile Number</label>
      <input type="tel" id="phone" name="phone">
      <input type="submit" value="Create an account">
      
    </form>
  </div>
</body>

<script>
  $(document).ready(function() {
    $('form').submit(function(event) {
      var newPassword = $('#new').val();
      var confirmPassword = $('#confirm').val();
      if (newPassword !== confirmPassword) {
        alert('Passwords do not match');
        event.preventDefault();
      }
    });
  });
</script>

</html>