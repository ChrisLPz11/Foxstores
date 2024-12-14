<?php
session_start();
include "admin/connection.php";
include "header.php";
?>
    <div class="main-wrapper clearfix">

        <section class="gst-spc1">
            <div class="container">
                <div class="">
                    <div class="col-md-12">
                        <div class="" id="best-seller">

                            <div class="col-2 col-lg-8 col-sm-4 border col-lg-push-2">
                                <div class="woocommerce-shipping-fields" style="border-style:solid; padding:50px; border-color:black; border-radius:10px; padding-left:150px; padding-right:150px;">
                                    <h4 class="cart-title-highlight title-3">Login</h4>

                                    <form name="login" action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="text"
                                                                               placeholder="Email" required
                                                                               name="email" autocomplete="off" style="text-transform: lowercase"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="password"
                                                                               placeholder="Password" required
                                                                               name="password" autocomplete="off" style="text-transform: lowercase"></div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group"><input class="form-control btn btn-success"
                                                                               type="submit" value="Login"
                                                                               style="background-color: #449d44; color:White"
                                                                               name="login"></div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group" style="text-align: center; color:black"><a
                                                        href="register.php">Haga clic aquí para registrarse.
                                                </div>
                                            </div>
                                            <div class="col-md-12 alert alert-danger alert-dismissible" id="errmsg"
                                                 style="display:none;margin-top: 10px;">
                                                <a href="#" class="close" data-dismiss="alert"
                                                   aria-label="close">&times;</a>
                                                <strong>Invalido!</strong> Correo o Contraseña.
                                            </div>
                                        </div>
                                    </form>

                                    <?php

                                    if (isset($_POST["login"])) {
                                        $email = mysqli_real_escape_string($link, $_POST["email"]);
                                        $password = mysqli_real_escape_string($link, $_POST["password"]);
                                        $password = md5($_POST['password']);
                                        $count = 0;
                                        $res = mysqli_query($link, "select * from signup where email='$email' && password='$password'");
                                        $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                    while ($row = mysqli_fetch_array($res))
                                    {
                                        $_SESSION["email"] = $row["email"];

                                        if(isset($_SESSION["checkout"]))
                                        {
                                        ?>
                                        <script type="text/javascript">
                                            window.location = "addres_verification.php";
                                        </script>
                                    <?php
                                        }
                                        else{
                                        ?>
                                        <script type="text/javascript">
                                            window.location = "my_order.php";
                                        </script>
                                    <?php
                                        }


                                    }


                                    }
                                    if ($count == 0)
                                    {
                                    ?>
                                        <script type="text/javascript">
                                            document.getElementById("errmsg").style.display = "block";
                                        </script>
                                        <?php
                                    }
                                    }

                                    ?>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </div>

    <div class="clear"></div>
<?php
include "footer.php";
?>