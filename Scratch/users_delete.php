<?php
require_once("db_connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from users WHERE id = '$id'";
    $result = $conn->query($sql);

    if($conn->query($sql) === TRUE){
        header('location:users.php');
    } else {
        header('location:users.php');
    }
}
?>