<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <a href="index.php" class="btn btn-success">Index Page</a>
    <a href="users.php" class="btn btn-success">Users</a><br><br>
        <div class="col-lg-6">
            <form action="register_submit.php" method="POST">
                <table class="table table-bordered">
                    <tr>
                        <td><label></label>Username:</td>
                        <td><input type="text" class="form-control" name="username" placeholder="Username" required></td>
                    </tr>

                    <tr>
                        <td>
                            <label>Name:</label>
                        </td>
                        <td>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Sex: </label>
                        </td>
                        <td>
                            <label>Male</label>
                            <input type="radio" name="sex" value="M">
                            <label>Female</label>
                            <input type="radio" name="sex" value="F">
                            <label>Others</label>
                            <input type="radio" name="sex" value="O">
                        </td>
                    </tr>
                </table>
                    <button class="btn btn-success" name="submit" type="submit">Submit Button</button>
            </form>
        </div>
</body>
</html>