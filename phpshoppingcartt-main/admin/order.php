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
        <div class="content">
            <h2 class="content-heading" style="margin-top: -10px">Detalles del pedido</h2>

            <div class="row">
                <div class="col-12">

                    <!-- Examples -->
                    <div class="card">

                        <div class="card-body">

                            <table id="example1" class="table table-striped">
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
                                $res = mysqli_query($link, "select * from order_user ORDER BY id DESC ");
                                while ($row = mysqli_fetch_array($res)) {

                                    $order_id = $row['id'];
                                    $name = $row['user_email'];
                                    $order_number=$row['orderno'];
                                    $order_date = $row['purchase_date'];
                                    $order_time = $row['purchase_time'];

                                    ?>
                                    <tr style="<?php if($row["read1"]=="n"){echo "background-color:#ececec";} ?>">
                                        <th scope="row"><?php echo $order_id; ?></th>

                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $order_number; ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo $order_time; ?></td>

                                        <td><a href="<?php echo 'view_order_details.php?id='.$order_id; ?>" class="btn btn-primary">Ver Orden</a></td>
                                    </tr>

                                <?php } ?>


                                </tbody>
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