<?php
session_start();
if(!isset($_SESSION["email"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
include "admin/connection.php";
include "header.php";
$id=$_GET["id"];
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

                            <h2 class="content-heading" style="margin-top: -10px; padding: 15px;">Detalles Usuario</h2>
                            <div class="row" style="padding: 15px;">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="panel-body">
                                            Correo :<?php echo $email; ?><br>
                                            Direccion :<?php echo $address; ?><br>

                                        </div>

                                    </div>
                                </div>
                                </main>
                                <hr>
                                <!-- this is for display records-->
                                <div class="row" style="margin: 0px; padding:0px; margin-top: -20px; min-height: 500px; margin:0px; padding:0px;"   >

                                    <div class="col-lg-12" style="overflow: auto;">
                                        <div class="row">
                                            <div class="col-lg-12" style="overflow: auto; ">

                                                <!-- Examples -->


                                                <table id="example1" class="table table-striped table-responsive ">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Imagen Producto</th>
                                                        <th>Nombre Producto</th>
                                                        <th>Precio</th>
                                                        <th>Cantidad</th>
                                                        <th>Sub Total</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $tot=0;
                                                    $res = mysqli_query($link, "select * from order_item where order_id=$id ");
                                                    while ($row = mysqli_fetch_array($res)) {

                                                        $order_id = $row['order_id'];
                                                        $name = $row['product_name'];
                                                        $product_img = $row['product_images'];
                                                        $product_price=$row['product_price'];
                                                        $product_qty = $row['product_qty'];


                                                        ?>
                                                        <tr style="<?php if($row["read1"]=="n"){echo "background-color:#ececec";} ?>">
                                                            <th scope="row"><?php echo $order_id; ?></th>
                                                            <td><img src="admin/<?php echo $product_img; ?>" height="100" width="100"></td>
                                                            <td><?php echo $name; ?></td>
                                                            <td>$<?php echo $product_price; ?></td>
                                                            <td><?php echo $product_qty; ?></td>
                                                            <td>$<?php echo $product_price * $product_qty; ?></td>
                                                        </tr>

                                                        <?php
                                                        $tot=$tot + ($product_price * $product_qty);
                                                    } ?>


                                                    <tr>
                                                        <td colspan="6" align="right"><?php echo "Grand Total=$".$tot; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    </tr>


                                                    </tbody>
                                                </table>


                                                <!-- /End Examples -->

                                            </div><!-- .col -->

                                        </div>
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