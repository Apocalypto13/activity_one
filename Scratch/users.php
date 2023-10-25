<?php
require_once('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<style>
    .hide {
        display: none;
    }
</style>
<body>
    <div class="col-lg-6">
    <a href="index.php" class="btn btn-success">Index Page</a>
    <a href="register.php" class="btn btn-success">Register Page</a><br><br>
    </div>
        <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            echo '<table class="table table-bordered">;
                    <th>Username</th>
                    <th>Name</th>
                    <th>Sex</th>
                    </table>';

            if ($result->num_rows > 0) {
                echo '<table class="table table-bordered">';

                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $sex = $row['sex'];
                    $name = $row['name'];
                   
                echo '<tr>
                        <td><label>'.$username.'</label></td>
                        <td><label>'.$name.'</label></td>
                        <td><label>'.$sex.'</label></td>
                            <td>
                                <form action="users_update.php" method="GET">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <button class="btn btn-info" type="submit">
                                    Edit</button>
                                </form>
                                </td>
                                <td>
                                <form action="users_delete.php" method="GET">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <button class="btn btn-info" type="delete">
                                    Delete 2.0</button>
                                </form> 
                            </td>
                            <td>
                                <button class="delete-users"
                                data-id="'.$id.'">Delete 3.0</button>
                            <div class="hide delete-options" id="options'.$id.'"><br>
                                <label>Are you sure you want to delete?</label><br>
                                <button class="btn btn-success delete-submit"
                                data-id="'.$id.'">Yes</button>
                                <button class="btn btn-danger delete-submit"
                                data-id="'.$id.'">No</button>
                            </div>
                            </td>
                    </tr>';
                }
                echo '</table>';
            } else {
                echo "0 results";
            }
            
        ?>

        <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/users.js"></script>

</body>
</html>