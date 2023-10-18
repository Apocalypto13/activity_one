<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href = "./css/styles.css">
    <title>Registration</title>
</head>
<body>
<script>
    function storeData() {
        let Username = document.getElementById("username").value;
        let Password = document.getElementById("password").value;
        let Email = document.getElementById("email").value;

        localStorage.setItem("username", Username);
        localStorage.setItem("email", Email);
        localStorage.setItem("password", Password);

        alert("Data Stored Successfully")
    }
</script>
    <div class = "registrationBackground">
    <div class = "registrationContainer">
        <p>REGISTER</p>
        <form onsubmit = "storeData()">
        <input type = "text" placeholder = "Username" id = "username" name = "username" required>
        <input type = "password" placeholder = "Password" id = "password" name = "password" required>
        <input type = "email" placeholder = "Email" id = "email" name = "email" required>
        <input type = "submit" value = "Register">
</form>
</div>
</div>
</body>
</html>