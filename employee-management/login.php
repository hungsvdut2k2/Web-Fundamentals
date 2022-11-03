<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <div class="card">
        <div class="card-header">
            <h4>Login Page</h4>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Username"
                        name="username" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your account with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit-button" value="Login">
                </div>
            </form>
        </div>
    </div>

    <?php
        include "db_connection.php";
        if (isset($_POST["submit-button"])) {
            $conn = OpenCon();
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM admin WHERE Username = '$username' AND Password = '$password'";
            $result = $conn -> query($query);
            CloseCon($conn);
            if(mysqli_num_rows($result) > 0) {
                header('location:admin.php');
            }
        }
    ?>
</body>

</html>