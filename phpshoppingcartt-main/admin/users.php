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
        <h2 class="content-heading">Detalles del usuario</h2>

        <div class="row">
            <div class="col-12">

                <!-- Examples -->
                <div class="card">

                    <div class="card-body">

                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Primer Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>

                            </tr>
                            </thead>

                            <tbody>
    <?php
    $count=0;
    $res=mysqli_query($link,"select * from signup");
    while($row=mysqli_fetch_array($res)) {
        $count=$count+1;
        ?>

                <tr>
                    <td><?php echo $count?></td>
                    <td><?php echo $row["firstname"]?></td>
                    <td><?php echo $row["lastname"]?></td>
                    <td><?php echo $row["email"]?></td>

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