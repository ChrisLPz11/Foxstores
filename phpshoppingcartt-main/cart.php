<?php
session_start();
include "admin/connection.php";

?>
<?php
$_SESSION["error1"] = "";
$count_data = "";
if (isset($_COOKIE['item']))  //this is for check cookies are available or nor
{
    $count_data = 0;
    foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move 3 times
    {
        $count_data = $count_data + 1;
        //$name1 variable return 1,2,3,4 so i use this for buton and textbox name
        if (isset($_POST["submit$name1"]))   //this is for checking update button pressed or not
        {
            $new_value = $_POST["text$name1"];    // this is for getting values from textbox
            if (!preg_match("/^[0-9]+$/", $new_value)) {
                $_SESSION["error1"] = "please enter only numeric value in Quantity";
            } else {
                if ($new_value == 0)   // if value found 0 then delete cookies
                {
                    setcookie("item[$name1]", "", time() - 1800);
                    ?>
                    <script type="text/javascript">window.location = "cart.php";</script> <?php

                } else   // this is for if user press more than 1 then this is useful for updating data
                {
                    $values11 = explode("__", $value);
                    $img1 = $values11[0];
                    $nm1 = $values11[1];
                    $prize1 = $values11[2];
                    $total1 = $prize1 * $new_value;
                    $tb_id = $values11[5];
                    $available_qty = 0;
                    $res = mysqli_query($link, "select * from products where id=$tb_id");
                    while ($row = mysqli_fetch_array($res)) {
                        $available_qty = $row["product_qty"];
                    }
                    if ($available_qty < $new_value) {
                        ?>
                        <script type="text/javascript">
                            alert("plae enter lower quantity, this much quantity not avaialble");
                        </script>
                        <?php

                    } else {
                        setcookie("item[$name1]", $img1 . "__" . $nm1 . "__" . $prize1 . "__" . $new_value . "__" . $total1 . "__" . $tb_id, time() + 1800);
                        $_SESSION["error1"] = "";
                        ?>
                        <script type="text/javascript">
                            window.location = "";
                        </script>
                        <?php
                    }

                }


            }
        }


//this is for if user press delete button
        if (isset($_POST["delete$name1"]))   //this is for checking update button pressed or not
        {

            setcookie("item[$name1]", "", time() - 1800);
            ?>
            <script type="text/javascript">window.location = "cart.php";</script> <?php
        }


    }

}
include "header.php";
?>
    <div class="main-wrapper clearfix">
        <?php
        ?>

        <section class="gst-spc1">
            <div class="container">
                <div class="">
                    <div class="col-md-12">
                        <div class="" id="best-seller">


                            <?php
                            if ($count_data == 0) {
                                ?>
                                <div class="col-lg-12" style="min-height: 500px">
                                    <center><h1>No hay datos disponibles en el carrito</h1></center>
                                </div>
                                <?php
                            } else {
                                ?>

                                <!-- this is for display records-->
                                <div class="row" style="margin: 0px; padding:0px; margin-top: -20px; min-height: 500px">

                                    <div class="col-lg-12">
                                        <div class="container col-lg-12"
                                             style="min-height:100px; max-width: 1000px; border-style: solid; border-width: 0px; ">
                                            <h3>Carro de la compra</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1  hidden-xs"
                                                     style="min-height:10px;"><strong>#</strong>
                                                </div>
                                                <div class="col-lg-1 col-md-2 col-sm-2  hidden-xs"
                                                     style="min-height:10px; "><strong>Imagen</strong>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-2 hidden-xs"
                                                     style="min-height:10px;"><strong>Producto
                                                        Titulo</strong>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-1 hidden-xs"
                                                     style="min-height:10px;"><strong>Price</strong>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs"
                                                     style="min-height:10px; ">
                                                    <strong>Cantidad</strong></div>
                                                <div class="col-lg-2 col-md-1 col-sm-1 hidden-xs"
                                                     style="min-height:10px; ">
                                                    <strong>Sub total</strong></div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"
                                                     style="min-height:10px; "><strong>Accion</strong>
                                                </div>
                                            </div>
                                            <?php

                                            ?>
                                            <hr>
                                            <form name="form1" action="" method="post">
                                                <?php
                                                $sub_total = 0;
                                                $_SESSION["cookie_product_name"] = "";
                                                if (isset($_COOKIE['item'])) {
                                                    $count = 0;
                                                    foreach ($_COOKIE['item'] as $name => $value) {
                                                        $values = explode("__", $value);
                                                        $count = $count + 1;
                                                        ?>
                                                        <div class="row">

                                                            <div class="col-lg-1 col-md-1 col-sm-1 " style=" ">
                                                                <strong><?php echo $count; ?></strong></div>
                                                            <div class="col-lg-1 col-md-2 col-sm-2" style=" "><img
                                                                    src="admin/<?php echo $values[0]; ?>" alt="..."
                                                                    class="img-responsive"/></div>
                                                            <div class="col-lg-2 col-md-3 col-sm-2" style=" "><h5
                                                                    class="nomargin"
                                                                    style="margin-top: -10px"><br> <?php echo $values[1]; ?></h5>
                                                            </div>
                                                            <div class="col-lg-2 col-md-1 col-sm-1"
                                                                 style=" ">$<?php echo $values[2]; ?>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-3" style=" "><input
                                                                    name="text<?php echo $name ?>"
                                                                    value="<?php echo $values[3]; ?>"
                                                                    type="number"
                                                                    class="form-control text-center"
                                                                    value="1" min="1" max="1000">
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-1"
                                                                 style=" ">$<?php echo($values[2] * $values[3]); ?>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2" style="">
                                                                <button type="submit" name="submit<?php echo $name ?>"
                                                                        class="btn btn-info btn-sm">

                                                                    <i
                                                                        class="fa fa-refresh" style="color:white"></i>


                                                                </button>
                                                                <button type="submit" name="delete<?php echo $name ?>"
                                                                        class="btn btn-danger btn-sm">
                                                                    <i
                                                                        class="fa fa-trash-o" style="color:white"></i>
                                                                </button>
                                                            </div>


                                                        </div>
                                                        <hr>

                                                        <?php

                                                        $sub_total = ($values[2] * $values[3]);

                                                    }
                                                }
                                                $_SESSION["cart_count"]=$count;
                                                $_SESSION["sub_total"] = $sub_total;
                                                ?>

                                                <hr>
                                                <div class="row">

                                                    <div class="col-lg-7 col-md-7 col-sm-8 "><a href="index.php"
                                                                                                class="btn "
                                                                                                style="background-color: black; color: #FFFFFF"><i
                                                                class="fa fa-angle-left"
                                                                style="background-color: black "></i> Continuar Comprando</a>
                                                    </div>


                                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 col-lg-push-1 "
                                                         style=" "><strong><h4>Total</h4>
                                                        </strong></div>
                                                    <div class="col-lg-2 col-md-2 col-sm-1 col-xs-5 col-lg-push-1"
                                                         style=" ">
                                                        <h4>$<?php echo $sub_total; ?> </h4></div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><a
                                                            href="checkout.php"
                                                            class="btn     "
                                                            style="background-color: black;color: #FFFFFF">Verificar</a>
                                                    </div>

                                                </div>

                                                <br>


                                                <br><br>
                                            </form>

                                        </div>
                                    </div>


                                </div>
                                <?php
                            }
                            ?>
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