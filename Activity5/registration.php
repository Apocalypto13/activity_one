<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form action="login.php" method="post">
<a href="registration.php">Register</a>
<a href="login.php">Login</a>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <button type="submit">Register</button>
  </div>
</form>

</body>
</html>