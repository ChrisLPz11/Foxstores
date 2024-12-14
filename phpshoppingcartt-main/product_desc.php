<?php
session_start();
include "admin/connection.php";
?>
<?php
$_SESSION["er"] = "";  //changes
if (isset($_POST["submit1011"])) {
    $_SESSION["er"] = "Your Item successfully added in cart"; //changes
    $d = 0;
    if (isset($_COOKIE['item'])) //this is for checking cookies available or not
    {
        foreach ($_COOKIE['item'] as $name => $value) {
            $d = $d + 1;
        }
        $d = $d + 1;
    } else {
        $d = $d + 1;
    }
    //to get item description from table
    $res3 = mysqli_query($link, "select * from products WHERE id='$_GET[id]'");
    while ($row3 = mysqli_fetch_array($res3)) {
        $img1 = $row3["product_img"];
        $nm = $row3["product_name"];
        $prize = $row3["product_price"];
        $qty = $_POST["qty1"];
        $total = $prize * $qty;
        $tb_id = $row3["id"];
        $av_qty = $row3["product_qty"];
    }
    if (isset($_COOKIE['item']))  //this is for check cookies are available or nor
    {
        foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
        {
            $values11 = explode("__", $value);
            $found = 0;
            if ($img1 == $values11[0])      //this is for check same cookies available or not if available then increase qty
            {
                //check here for quantity add in the cart for more than available quantity

                if ($av_qty < $qty) {
                    ?>
                    <!--- <script type="text/javascript">window.location = "view-cart.php";</script> --->
                    <script type="text/javascript">
                        alert("Pleas Enter Lower Quantity, We Don't Have This Much Quantity");
                        window.location.href = window.location.href;
                    </script> <?php

                } else {

                    $found = $found + 1;
                    $qty = $values11[3] + $_POST["qty1"];
                    $total = $values11[2] * $qty;
                    setcookie("item[$name1]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total . "__" . $tb_id, time() + 1800);

                    ?>
                    <!--- <script type="text/javascript">window.location = "view-cart.php";</script> --->
                    <script type="text/javascript">
                        alert("Your Product Added Successfully To The Cart");
                        window.location.href = "cart.php"
                    </script> <?php
                }


            }

        }

        if ($found == 0)
        {

            if ($av_qty < $qty)
            {
                ?>
                <!--- <script type="text/javascript">window.location = "view-cart.php";</script> --->
                <script type="text/javascript">
                    alert("Pleas Enter Lower Quantity, We Don't Have This Much Quantity 2");
                    window.location.href = window.location.href;
                </script> <?php

            }
            else
            {
                setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total . "__" . $tb_id, time() + 1800);//new

                //this is for if 2 cookies available and when you add new cookies then this run
                ?>
                <script type="text/javascript">
                    alert("Your Product Added Successfully To The Cart");
                    window.location.href = "cart.php"
                </script> <?php
            }

        }

    } else   // this execute when item not found so this enter new item means cookie blank 0 cookies
    {
        if ($av_qty < $qty) {
            ?>
            <!--- <script type="text/javascript">window.location = "view-cart.php";</script> --->
            <script type="text/javascript">
                alert("Pleas Enter Lower Quantity, We Don't Have This Much Quantity");
            </script> <?php

        } else {
            setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total . "__" . $tb_id, time() + 1800);//new
            ?>
            <script type="text/javascript">
                alert("Your Product Added Successfully To The Cart");
                window.location.href = "cart.php"
            </script> <?php
        }
    }

}

include "header.php";
?>


    <script type="text/javascript">
        // Quantity spin buttons
        function increase_by_one(field) {
            nr = parseInt(document.getElementById(field).value);
            document.getElementById(field).value = nr + 1;
        }

        function decrease_by_one(field) {
            nr = parseInt(document.getElementById(field).value);
            if (nr > 0) {
                if ((nr - 1) > 0) {
                    document.getElementById(field).value = nr - 1;
                }
            }
        }
    </script>


<?php
$id = $_GET["id"];

if (!is_numeric($id)) {
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php
}


$count = 0;
$res = mysqli_query($link, "select * from products where id=$id");
$count = mysqli_num_rows($res);
if ($count == 0) {
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php
}

$proimage = "";
$proname = "";
$proprice = "";
$procat = "";
$prodes = "";
$proqty = "";
$res = mysqli_query($link, "select * from products where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $proimage = $row["product_img"];
    $proname = $row["product_name"];
    $proprice = $row["product_price"];
    $procat = $row["category"];
    $prodes = $row["product_descriptions"];
    $proqty = $row["product_qty"];
}

?>
<?php
$id = $_GET["id"];
?>
    <div class="main-wrapper clearfix" style="margin-top:-60px ">
        <section class="gst-spc1">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="" id="best-seller">
                            <div class="main-wrapper clearfix">
                                <div class="site-pagetitle jumbotron">
                                    <div class="container theme-container text-center">
                                        <h3><?php echo $proname; ?></h3>

                                    </div>
                                </div>

                                <div class="theme-container container">
                                    <main id="main-content" class="main-content">
                                        <div itemscope itemtype="#"
                                             class="product has-post-thumbnail product-type-variable">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">

                                                        <img src="admin/<?php echo $proimage; ?>" class="img img-responsive" style="width: 270px; height: 285px;" >

                                                </div>

                                                <div class="col-lg-5 col-sm-12 col-md-12 col-xs-12 ">
                                                    <div class="summary entry-summary">
                                                        <div class="woocommerce-product-rating"
                                                             itemprop="aggregateRating" itemscope
                                                             itemtype="http://schema.org/AggregateRating">

                                                            <div class="posted_in">
                                                                <h3 class="funky-font-2 fsz-20">Categoría de producto:<?php echo $procat; ?></h3>
                                                            </div>
                                                        </div>

                                                        <div class="product_title_wrapper">
                                                            <div itemprop="name" class="product_title entry-title">
                                                                <?php echo $proname; ?>
                                                                <p class="font-3 fsz-18 no-mrgn price"><b
                                                                        class="amount blk-clr">$ <?php echo $proprice ?></b>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div itemprop="description" class="fsz-15">
                                                            <p><?php echo $prodes ?></p>
                                                        </div>

                                                        <ul class="stock-detail list-items fsz-12">
                                                            <li><strong> Cantidad de producto : <span
                                                                        class="blk-clr"> <?php echo $proqty ?> </span>
                                                                </strong></li>
                                                        </ul>

                                                        <form class="variations_form cart" method="post">
                                                            <div class="row">
                                                                <div class="col-sm-7">
                                                                    <div class="row add-to-cart">

                                                                        <div class="col-lg-12 product-qty">
                                                                            <span class="btn btn-default btn-lg btn-qty col-lg-2 col-xs-3" onclick="increase_by_one('qty11');">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                                            </span>

                                                                            <input
                                                                                   class="btn btn-default  col-lg-2 col-xs-3"
                                                                                   id="qty11" name="qty1" value="1"
                                                                                   style="margin-left: 5px; height:45px;"/>

                                                                                    <span class="btn btn-default btn-lg btn-qty col-lg-2 col-xs-3"
                                                                                          onclick="decrease_by_one('qty11');" style="margin-left: 5px">
                                                                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                                                            </span>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-9" style="margin-top: 5px;">
                                                                    <div class="form-group">
                                                                        <button type="submit"
                                                                                class="single_add_to_cart_button button alt fancy-button left"
                                                                                id="submit1" name="submit1011" <?php if($proqty==0){echo "disabled";} ?>>

                                                                            <?php
                                                                            if($proqty==0){
                                                                                echo "Sold Out";
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "Add To Cart";
                                                                            }
                                                                            ?>

                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- .summary -->
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </main>
                                </div>
                                <div class="clear"></div>
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