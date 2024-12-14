<?php
session_start();
include "admin/connection.php";
include "header.php";

?>

<?php
if(!isset($_SESSION["checkout"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php

}
if(!isset($_SESSION['email']))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php

}
$_SESSION["address_verify"]="yes";
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
                                    <h4 class="cart-title-highlight title-3">Address Verification</h4>
                                    <form action="" name="register" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <lable>Primer Nombre</lable>
                                            <div class="form-group"><input class="form-control" type="text" placeholder="First Name" required name="firstname" value="<?php echo $firstname?>" ></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Apellido</lable>
                                            <div class="form-group"><input class="form-control" type="text" placeholder="Last Name" required name="lastname" value="<?php echo $lastname?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Correo</lable>
                                            <div class="form-group"><input class="form-control" type="email" placeholder="Email" readonly name="email" value="<?php echo $email?>" ></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Contraseña</lable>
                                            <div class="form-group"><input class="form-control" type="password" placeholder="Password" readonly name="password" value="<?php echo $password?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Contacto</lable>
                                            <div class="form-group"><input class="form-control" type="text" placeholder="Contact" required name="contact" value="<?php echo $contact?>"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <lable>Direccion</lable>
                                            <div class="form-group"><textarea placeholder="Address" class="form-control" name="address" required><?php echo $address?></textarea></div>
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

                                        $encr = md5(md5(time()));
                                        $_SESSION["phpshoppingcart"] = $encr;
                                        $paypal_url = 'https://www.sandbox.paypal.com/';
                                        $pay = $_SESSION["sub_total"];
                                        $orderno=rand(111111,999999);
                                        $_SESSION["orderno"]=$orderno;
                                        ?>
                                        <form action="<?php echo $paypal_url; ?>/cgi-bin/webscr" method="post" name="buyCredits" id="buyCredits">
                                            <input type="hidden" name="cmd" value="_xclick">
                                            <input type="hidden" name="business" value="amit_1266030690_per@gmail.com">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="item_name" value="payment for event calendar">
                                            <input type="hidden" name="item_number" value="">
                                            <input type="hidden" name="amount" value="<?php echo $pay; ?>">
                                            <input type="hidden" name="return"
                                                   value="http://localhost/phpshoppingcart/order_success.php?orderno=<?php echo $orderno; ?>">
                                        </form>
                                        <script type="text/javascript">
                                            document.getElementById("buyCredits").submit();
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