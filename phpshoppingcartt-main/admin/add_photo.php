<?php
session_start();
include "connection.php";
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>

      <!--header end-->
      <!--sidebar start-->
<?php
include "header.php";
?>
      <!--sidebar end-->
      <!--main content start-->
<main id="main-container">
    <div class="content">
        <h2 class="content-heading" style="margin-top: -10px">Añadir nuevo slider</h2>

        <div class="row">
            <div class="col-12">
                <div class="card" style="padding:10px">



                          <div class="row">
                                  <div class="card-body col-md-5">
                                      <form name="admin" method="post" action="" enctype="multipart/form-data">
                                          <div class="form-group">
                                              <label for="">Imagen  <span style="color:red;">(1920 x 840)</span></label>
                                              <input type="file" class="form-control" id=""   name="image_path" required >
                                          </div>
                                          <input type="submit" class="btn btn-primary" name="submit1" value="Insertar">
                                            <br><br>
                                          <div class="form-group alert alert-success" id="d11" style="display: none;color:green">
                                              <center><strong style="color:green">Exito!</strong> La imagen se inserto con exito.</center>
                                          </div>
                                      </form>

                                      <?php
                                      if(isset($_POST["submit1"])) {
                                          $tm = md5(time());
                                          $fnm = $_FILES["image_path"]["name"];
                                          $dst = "images/" . $tm . $fnm;
                                          $dst1 = "images/" . $tm . $fnm;
                                          move_uploaded_file($_FILES["image_path"]["tmp_name"], $dst);
                                          mysqli_query($link,"insert into photo_gallery(id,image_path)VALUE
                                            (NULL,'$dst')") or die(mysqli_error($link));
                                          ?>
                                          <script type="text/javascript">
                                              document.getElementById("d11").style.display = "block"
                                          </script>
                                          <?php
                                      }

                                      ?>
                                  </div>
                          <div class="card-body col-md-7">

                                  <div class="adv-table">
                                      <table  class="display table table-bordered table-striped" id="dynamic-table">
                                          <thead>
                                          <tr>
                                              <th>No.</th>
                                              <th>Imagen</th>
                                              <th>Accion</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                          $count=0;
                                          mysqli_query($link,"set names utf8");
                                          $res=mysqli_query($link,"select * from photo_gallery");
                                          while($row=mysqli_fetch_array($res)) {
                                              $count=$count+1;
                                              ?>
                                              <tr class="gradeX">
                                                  <td><?php echo $count;?></td>
                                                  <td><img src="<?php echo $row["image_path"];?>" height="100" width="250">

                                                  </td>
                                                  <td>
                                                      <button class="btn btn-danger btn-sm" onclick="window.location='delete_photo.php?id=<?php echo $row["id"]?>'"><i class="fa fa-trash-o "></i></button>
                                                  </td>
                                              </tr>
                                              <?php
                                          }
                                          ?>
                                          </tbody>

                                      </table>
                                  </div>

                          </div>
                          </div>
                      </section>
                  </div>
              </div>
          </section>
      </section>
            </div>
        </div>
    </main>
<?php
include "footer.php";
?>
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/dynamic_table_init.js"></script>
