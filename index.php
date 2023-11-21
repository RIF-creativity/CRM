<?php
require 'function.php';
session_start();

// if (isset($_SESSION["login"])) {
//   header("Location:Admin/AdminDashboard/DaftarPenumpang.php");
//   exit;
// }
 $conn = mysqli_connect("localhost", "root", "", "crm");

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
  if (mysqli_num_rows($sql) === 1) {
    $row = mysqli_fetch_assoc($sql);
    if ($password === $row["password"] && $row["level"] === "super admin" ) {
      $_SESSION["login"] = true;
      header('Location: admin/index.php');
    }else if($password === $row ["password"] && $row["level"] === "admin") {
        $_SESSION["login"] = true;
        header('Location: admin/index.php');
    }else{
        echo '<script>
            alert("username or password is wrong")
        </script>';
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="../package/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="text-center bg-light">

    <div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="post" action="">
                    <h4>Welcome</h4><br>
                    <h4>CRM Project</h4>

                    <div class="form-floating">
                        <label for="floatingInput">Username</label>
                        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" fdprocessedid="8137xg" required>
                    </div>
                    <div class="form-floating pt-1">
                        <label for="floatingPassword">Password</label>
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" fdprocessedid="mj0mpk" required>
                    </div>
                    

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="login">Login</button>
                    <p class="mt-2 mb-3 text-muted">© 2023</p>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="../package/dist/sweetalert2.all.min.js"></script>
</body>

</html>