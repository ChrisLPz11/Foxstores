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
            <h2 class="content-heading" style="margin-top: -10px">Categoria</h2>

            <div class="row ">
                <div class="col-lg-6">


                    <div class="card">

                        <form class="col-md-10" name="form1" action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="categorytname" class="col-form-label">Categoria</label>
                                    <input type="text" class="form-control" name="categorytname"
                                           placeholder="Nombre de la categoria" required>
                                </div>

                                <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary default-btn-color" name="submit" id="submit">
                                    Añadir categoría
                                </button>

                                </div>
                                <div class="alert alert-success col-md-12" id="d11" style="display: none;">
                                    <strong>Exito!</strong> Se ha añadido correctamente.
                                </div>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST["submit"])) {

                            mysqli_query($link, "insert into category(id,category_name) VALUES (NULL,'$_POST[categorytname]')") or die(mysqli_error($link));

                            ?>
                            <script type="text/javascript">
                                document.getElementById("d11").style.display = "block";
                            </script>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="padding:10px">
                        <table id="example1" class="table table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Categorias</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $srno = 0;
                            $res = mysqli_query($link, "select * from category") or die(mysqli_error($link));
                            while ($row = mysqli_fetch_array($res)) {
                                $srno = $srno + 1;
                                ?>
                                <tr>
                                    <td><?php echo $srno; ?></td>
                                    <td><?php echo $row["category_name"] ?></td>
                                    <td><a href="edit_category.php?id=<?php echo $row['id'] ?>" style="color:#6d5196"><span class="ti-pencil-alt"></span></a></td>
                                    <td><a href="delete_category.php?id=<?php echo $row['id'] ?>" style="color:red"><i class="fa fa-ban"></i></a></td>


                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php
include "footer.php";
?>