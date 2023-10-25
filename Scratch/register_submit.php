<?php
require_once('db_connection.php');
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];

    $sql = "INSERT INTO users (username, name, sex)
                VALUES ('$username', '$name', '$sex')";
        
                    if ($conn->query($sql) === TRUE) {
                        header('location:users.php');
                    }  else {
                        echo "Error: " . $sql . "<br>" . $conn_error;
                    }
        
                    $conn->close();
    } else {
        header('location:register.php');
    }
?>