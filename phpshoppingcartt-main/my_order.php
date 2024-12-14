<?php
session_start();

if(!isset($_SESSION["email"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}

include "admin/connection.php";
include "header.php";


?>

    <div class="main-wrapper clearfix">
        <section class="gst-spc1">
            <div class="container">
                <div class="">
                    <div class="col-md-12">
                        <div class="spc-60 row">
                            <main class="col-sm-12">
                            <article class="woocommerce-cart">
                                <div class="account-details-wrap">
                                    <div class="heading-2">
                                        <h3 class="title-3 fsz-18">Su historial de pedidos</h3>
                                    </div>

                                    <div class="col-lg-12" style="overflow: auto; margin:0px; padding:0px">




                                        <?php
                                        $count = 0;
                                        $res = mysqli_query($link, "select * from order_user where user_email='$_SESSION[email]' ORDER BY id DESC ");
                                        $count = mysqli_num_rows($res);

                                        if ($count == 0)
                                        {
                                            echo "<center> <p style='color: red'>
                                             There is no new order from you.</p>
                                            </center>";
                                        }
                                        else
                                        {
                                        ?>
                                        <table id="example1" class="table table-striped table-responsive" style="margin: 0px; padding:0px;">
                                            <thead>
                                            <tr>
                                                <th>Id Orden</th>
                                                <th>Correo del Usuario</th>
                                                <th>Numero de Orden</th>
                                                <th>Fecha</th>
                                                <th>Tiempo</th>
                                                <th>Accion</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            while ($row = mysqli_fetch_array($res))
                                            {

                                                $order_id = $row['id'];
                                                $name = $row['user_email'];
                                                $order_number = $row['orderno'];
                                                $order_date = $row['purchase_date'];
                                                $order_time = $row['purchase_time'];

                                                ?>
                                                <tr style="<?php if ($row["read1"] == "n") {
                                                    echo "background-color:#ececec";
                                                } ?>">
                                                    <th scope="row"><?php echo $order_id; ?></th>

                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $order_number; ?></td>
                                                    <td><?php echo $order_date; ?></td>
                                                    <td><?php echo $order_time; ?></td>

                                                    <td><a href="user_details.php?id=<?php echo $row["id"] ?>"
                                                           class="btn btn " style=" background-color: #e55e75; color: black">Ver Orden</a></td>
                                                </tr>

                                            <?php
                                            }
                                            }
                                            ?>


                                            </tbody>
                                        </table>


                                        <!-- .card-body -->

                                    </div>

                                </div>

                            </article>
                                </main>

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