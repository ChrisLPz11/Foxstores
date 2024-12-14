<?php
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
                                <div class="woocommerce-shipping-fields"
                                     style="border-style:solid; padding:50px; border-color:black; border-radius:10px; padding-left:150px; padding-right:150px;">
                                    <h4 class="cart-title-highlight title-3">Registrar</h4>

                                    <form action="" name="register" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="text"
                                                                               placeholder="Primer Nombre" required
                                                                               name="firstname"
                                                                               style="text-transform: lowercase"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="text"
                                                                               placeholder="Apellido" required
                                                                               name="lastname"
                                                                               style="text-transform: lowercase"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="email"
                                                                               placeholder="Correo" required name="email"
                                                                               style="text-transform: lowercase"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="password"
                                                                               placeholder="Contraseña" required
                                                                               name="password"
                                                                               style="text-transform: lowercase"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><input class="form-control" type="text"
                                                                               placeholder="Contacto" required
                                                                               name="contact"
                                                                               style="text-transform: lowercase"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"><textarea placeholder="Dirección de envío"
                                                                                  class="form-control" name="address"
                                                                                  required
                                                                                  style="text-transform: lowercase"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><input class="form-control btn btn-success"
                                                                               type="submit" value="Register"
                                                                               name="register"
                                                                               style="background-color: #449d44; color:white">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group" style="text-align: center"><a href="login.php">Click
                                                        Here For Login.</div>
                                            </div>

                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST["register"])) {
                                        $firstname = mysqli_real_escape_string($link, $_POST["firstname"]);
                                        $lastname = mysqli_real_escape_string($link, $_POST["lastname"]);
                                        $email = $_POST["email"];
                                        $password = mysqli_real_escape_string($link, $_POST["password"]);
                                        $password = md5($_POST['password']);
                                        $address = mysqli_real_escape_string($link, $_POST["address"]);
                                        mysqli_query($link, "set names utf8");

                                        $count = 0;
                                        $res = mysqli_query($link, "select * from signup where email='$email'");
                                        $count = mysqli_num_rows($res);

                                        if ($count > 0) {
                                            ?>
                                            <script type="text/javascript">
                                                alert("this email is already registered, please choose another email");
                                            </script>
                                        <?php
                                        }
                                        else {
                                        mysqli_query($link, "insert into signup(id,firstname,lastname,email,password,contact,address) VALUE (NULL,'$firstname','$lastname','$email','$password','$_POST[contact]','$address')") or die(mysqli_error($link));
                                        ?>
                                            <script type="text/javascript">
                                                alert("Registration Successfully");
                                                window.location = "login.php";
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