<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:ital,wght@0,400;0,500;1,400;1,700&display=swap" rel="stylesheet">
    <title>FITPRO</title>
    <style>
    </style>
</head>

<body>
    <button type="submit" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">
        Login
    </button>
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fusername" name="fusername" placeholder="name@example.com">
                            <label for="fusername">Username : </label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="fpass" name="fpass" placeholder="Password">
                            <label for="fpass">Password : </label>
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['fusername'];
    $password = $_POST['fpass'];

    $query = ("SELECT * FROM `user` WHERE user='$username'");

    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) == 1) {
        $email_pass = mysqli_fetch_assoc($result);

        if ($email_pass['password'] == $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            echo "<script>alert('Login Successful.. Welcome ADMIN') </script>";
            header("location: index.php");
        } else {
            echo "<script>alert('Incorrect Password')</script>";
        }
    } else {
        echo "<script>alert('Invalid Username')</script>";
    }
}
?>