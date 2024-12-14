<?php
session_start();
include "admin/connection.php";
include "header.php";

?>

<?php
if(!isset($_SESSION["email"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php

}
?>
<?php
$firstname="";
$lastname="";
$email="";
$password="";
$contact="";
$address="";
$res=mysqli_query($link,"select * from signup where email='$_SESSION[email]'");
while($row=mysqli_fetch_array($res))
{
    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $email=$row["email"];
    $password=$row["password"];
    $contact=$row["contact"];
    $address=$row["address"];
}
?>
    <div class="main-wrapper clearfix">
        <section class="gst-spc1">
            <div class="container">
                <div class="">
                    <div class="col-md-12">
                        <div class="" id="best-seller">

                            <div class="col-2 col-lg-8 col-sm-4 border col-lg-push-2">
                                <div class="woocommerce-shipping-fields" style="border-style:solid; padding:50px; border-color:black; border-radius:10px; padding-left:150px; padding-right:150px;">
                                    <h4 class="cart-title-highlight title-3">Editar perfil</h4>
                                    <form action="" name="register" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <lable>Primer Nombre</lable>
                                            <div class="form-group"><input class="form-control" type="text" placeholder="Primer Nombre" required name="firstname" value="<?php echo $firstname?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Apellido</lable>
                                            <div class="form-group"><input class="form-control" type="text" placeholder="Apellido" required name="lastname" value="<?php echo $lastname?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Correo</lable>
                                            <div class="form-group"><input class="form-control" type="email" placeholder="Corrreo" readonly name="email" value="<?php echo $email?>" ></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Contraseña</lable>
                                            <div class="form-group"><input class="form-control" type="password" placeholder="Contraseña" readonly name="password" value="<?php echo $password?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>ContactO</lable>
                                            <div class="form-group"><input class="form-control" type="text" placeholder="Contacto" required name="contact" value="<?php echo $contact?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Direccion</lable>
                                            <div class="form-group"><textarea placeholder="Address" class="form-control" name="Direccion" required><?php echo $address?></textarea></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><input class="form-control btn btn-success" type="submit" value="Update" name="updatee" style="background-color: #449d44; color:white"></div>
                                        </div>

                                    </div>
                                    </form>
                                    <?php
                                    if(isset($_POST["updatee"]))
                                    {
                                        $firstname=mysqli_real_escape_string($link,$_POST["firstname"]);
                                        $lastname=mysqli_real_escape_string($link,$_POST["lastname"]);
                                        $address=mysqli_real_escape_string($link,$_POST["address"]);
                                        mysqli_query($link,"set names utf8");
                                        mysqli_query($link,"update signup set firstname='$firstname',lastname='$lastname',contact='$_POST[contact]',address='$address'")or die(mysqli_error($link));
                                        ?>
                                        <script type="text/javascript">
                                            window.location = "edit_profile.php";
                                        </script>
                                    <?php
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