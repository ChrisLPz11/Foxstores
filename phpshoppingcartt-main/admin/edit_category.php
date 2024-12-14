<?php
include "connection.php";
include "header.php";
$id=$_GET["id"];
$categoryname="";
        $res = mysqli_query($link, "select * from category where id=$id") or die(mysqli_error($link));
        while ($row = mysqli_fetch_array($res)) {

            $categoryname=$row["category_name"];

        }
?>
    <main id="main-container">
        <div class="content">
            <h2 class="content-heading">Editar Categoria</h2>

            <div class="row ">
                <div class="col-lg-6">


                    <div class="card" >

                        <form class="col-md-10" name="form1" action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="categorytname" class="col-form-label">Categoria </label>
                                    <input type="text" class="form-control" name="categoryname"
                                           placeholder="" value="<?php echo $categoryname; ?>" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary default-btn-color" name="submit1" id="submit" >Actualizar Categoria
                                    </button>
                                </div>
                                <div class="alert alert-success col-md-12" id="d11" style="display: none;">
                                    <strong>Éxito!</strong> La categoría se actualizó correctamente.
                                </div>
                            </div>
                        </form>

                        <?php
                        if(isset($_POST["submit1"]))
                        {
                            mysqli_query($link,"update category set category_name='$_POST[categoryname]' where id=$id");

                            ?>
                            <script type="text/javascript">
                                document.getElementById("d11").style.display="block";


                                setTimeout(function(){
                                    window.location="category.php";

                                },1000);



                            </script>
                            <?php

                        }

                        ?>

                    </div>
                </div>

            </div>

        </div>
    </main>

<?php


?>

<?php
include "footer.php";
?>