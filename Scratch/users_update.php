<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Something</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <?php
        require_once('db_connection.php');
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $username = $row['username'];
                    $sex = $row['sex'];
                    $name = $row['name'];
                    $checkedMale = 'checked';
                    $checkedFemale = '';

                }
            }  else {   
                header('location:users.php');
            }

        } else {
            header('location:users.php');
        }
    ?>
    
    <a href="index.php" class="btn btn-success">Index Page</a>
    <a href="users.php" class="btn btn-success">Users</a><br><br>
        <div class="col-lg-6">
            <form action="users_submit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <table class="table table-bordered">
                    <tr>
                        <td><label></label>Username:</td>
                        <td><input type="text" class="form-control" name="username" 
                        value="<?php echo $username ?>" placeholder="Username" required>
                    </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Name:</label>
                        </td>
                        <td>
                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Sex: </label>
                        </td>
                        <td>
                            <label>Male</label>
                            <input type="radio" name="sex" value="M" value="<?php echo $checkedMale ?>">
                            <label>Female</label>
                            <input type="radio" name="sex" value="F" value="<?php echo $checkedFemale ?>">
                            <label>Others</label>
                            <input type="radio" name="sex" value="O">
                        </td>
                    </tr>
                </table>
                    <button class="btn btn-success" name="update" type="submit">Update</button>
            </form>
        </div>
</body>
</html>