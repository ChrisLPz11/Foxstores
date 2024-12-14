<?php
session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from html.alfisahr.com/prudence/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2017 09:22:08 GMT -->
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/plugins/themify/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style00e0.css">


</head>

<body>
<div id="page-container2">
    <div class="page-helper">
        <div class="form-container">
            <div class="logo mb-4" style="margin-top: -200px; ">

                <p style="font-size:30px;">Administrador</p>
            </div>

            <form name="form1" action="" method="post">
                <div class="login-box">
                    <div class="form-group">
                        <label for="email">Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-block btn-alt-primary" name="submit1">Iniciar sesión</button>
                    <br>

                    <div class="alert alert-danger" id="error_msg" style="display: none;">
                        <strong>Incorrecto!</strong> Correo o Contraseña.
                    </div>
                </div>

        </div>
        </form>
    </div>
</div>

<?php

if (isset($_POST["submit1"])) {
    $user = mysqli_real_escape_string($link, $_POST["username"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);
    $count = 0;
    $res = mysqli_query($link, "select * from admin where username='$user' && password='$password'");
    $count = mysqli_num_rows($res);
    if ($count > 0) {
    while ($row = mysqli_fetch_array($res)) {
        date_default_timezone_set('Europe/London');
        $_SESSION["username"] = $row["username"];
        ?>
        <script type="text/javascript">
            window.location = "dashboard.php";
        </script>
    <?php
    }
    }
    else
    {
    ?>
        <script type="text/javascript">
            document.getElementById("error_msg").style.display = "block"
        </script>
        <?php
    }
}


?>


</body>

<!-- Mirrored from html.alfisahr.com/prudence/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2017 09:22:08 GMT -->
</html>