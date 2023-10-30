<!DOCTYPE html>
<html>
<body>

<h2>Login Page</h2>

<form action="dashboard.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>
  <a href="registration.php">Register</a>
</form>

</body>
</html>