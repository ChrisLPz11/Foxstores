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
            <h2 class="content-heading" style="margin-top: -10px">Detalles Producto</h2>

            <div class="row">
                <div class="col-12">

                    <!-- Examples -->
                    <div class="card">

                        <div class="card-body">

                            <table id="example1" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Categoria</th>
                                    <th>Nombre del producto</th>
                                    <th>Pricio</th>
                                    <th>Cantidad</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $res=mysqli_query($link,"select * from products");
                                    while($row=mysqli_fetch_array($res))
                                    {?>
                                        <tr>
                                            <td><img src="<?php echo $row["product_img"];?>" height="100" width="100"> </td>
                                            <td><?php echo $row["category"]?></td>
                                            <td><?php echo $row["product_name"]?></td>
                                            <td><?php echo $row["product_price"]?></td>
                                            <td><?php echo $row["product_qty"]?></td>
                                            <td><a href="edit_product.php?id=<?php echo $row['id'] ?>" style="color:#6d5196"><span class="ti-pencil-alt"></span></a>
                                           <a href="delete_product.php?id=<?php echo $row['id'] ?>" style="color:red; margin-left:10px"><i class="fa fa-ban"></i></a></td>
                                        </tr>
                                    <?php
                                    }

                                ?>

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
