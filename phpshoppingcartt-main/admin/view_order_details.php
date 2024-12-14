<?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>

<?php
include "connection.php";
include "header.php";
?>
    <main id="main-container">
        <?php
        $order_id = $_GET['id'];

        $res = mysqli_query($link, "select * from order_user WHERE id=$order_id") or die(mysqli_errno($link));
        while ($row = mysqli_fetch_array($res)) {
            $email = $row['user_email'];

            $res1 = mysqli_query($link, "select * from signup WHERE email='$email'") or die(mysqli_errno($link));
            while ($row1 = mysqli_fetch_array($res1)) {
                $firstname=$row1["firstname"];
                $lastname=$row1["lastname"];
                $email=$row1["email"];
                $contact=$row1["contact"];
                $address=$row1["address"];
            }


        }
        ?>

        <h2 class="content" style="margin-top:-10px">User Details</h2>
        <div class="row">
            <div class="col-12" style="margin-left:250px">
                <div class="card">
                    <div class="card-body">
                    Nombre :<?php echo $firstname; ?>&nbsp;<?php echo $lastname; ?><br>
                    Correo :<?php echo $email; ?><br>
                    Adress :<?php echo $address; ?><br>
                    Contacto :<?php echo $contact; ?><br>

                </div>

            </div>
        </div>
        <hr>
        <div class="content">
            <h2 class="content-heading" style="margin-top: -80px">Order Details</h2>

            <div class="row">
                <div class="col-12">

                    <!-- Examples -->
                    <div class="card">

                        <div class="card-body">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Imagen del Producto</th>
                                    <th>Nombre del Producto</th>
                                    <th>Precio</th>
                                    <th><Canvas>Cantidad</Canvas></th>
                                    <th>Sub Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $subtotal=0;
                                $res = mysqli_query($link, "select * from order_item where order_id=$order_id ");
                                while ($row = mysqli_fetch_array($res)) {

                                    $order_id = $row['order_id'];
                                    $name = $row['product_name'];
                                    $product_img = $row["product_images"];
                                    $product_price=$row['product_price'];
                                    $product_qty = $row['product_qty'];


                                    ?>
                                    <tr style="<?php if($row["read1"]=="n"){echo "background-color:#ececec";} ?>">
                                        <th scope="row"><?php echo $order_id; ?></th>

                                        <td><img src="<?php echo $product_img; ?>" height="100" width="100"></td>
                                        <td><?php echo $name; ?></td>

                                        <td>$<?php echo $product_price; ?></td>
                                        <td><?php echo $product_qty; ?></td>
                                        <td>$<?php echo $product_price * $product_qty; ?></td>
                                            <?php $subtotal=$subtotal + ($product_price * $product_qty);?>

                                    </tr>

                                <?php } ?>


                                </tbody>
                                    <tr>
                                        <td style="font-size: 20px; text-align: right" colspan="6" >Grand Total :$<?php echo $subtotal;?></td>
                                    </tr>
                            </table>

                        </div><!-- .card-body -->
                    </div><!-- .card -->
                    <!-- /End Examples -->

                </div><!-- .col -->

            </div><!-- .row -->

        </div>
    </main>
<?php
include "footer.php";
?>

