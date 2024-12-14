<?php
include "connection.php";
include "header.php";
?>
<?php
$projectname="";
$res=mysqli_query($link,"select * from about_contact_title");
while($row=mysqli_fetch_array($res))
{
    $projectname=$row["project_title"];
}
?>
    <!-- MAIN CONTAINER -->
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-5">
                                <form name="" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label for="productname" class="col-form-label">Nombre del Proyecto</label>
                                        <input type="text" class="form-control" name="project_title"
                                               placeholder="Nombre del Proyecto" required value="<?php echo $projectname;?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary default-btn-color" name="submit1" id="submit">Actualizar Nombre
                                        </button>
                                    </div>
                                    <div class="alert alert-success col-md-12" id="d11" style="display: none;">
                                        <strong>Éxito!</strong> El nombre del proyecto se actualizó correctamente.
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST["submit1"]))
                                    {

                                        mysqli_query($link,"update about_contact_title set project_title='$_POST[project_title]'");
                                ?>
                                <script type="text/javascript">
                                    document.getElementById("d11").style.display="block";
                                    window.location="project_name.php";
                                </script>
                                <?php
                                }
                                ?>

                            </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
<!-- .content -->
</main>

<?php
include "footer.php";
?>