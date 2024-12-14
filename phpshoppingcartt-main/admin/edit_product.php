<?php
include "connection.php";
include "header.php";
$id = $_GET["id"];
?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="multiimageupload/script.js"></script>

    <!-------Including CSS File------>
    <link rel="stylesheet" type="text/css" href="multiimageupload/style.css">

    <script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            // General options
            mode: "textareas",
            theme: "advanced",
            plugins: "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

            // Theme options
            theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            theme_advanced_resizing: true,

            // Example content CSS (should be your site CSS)
            content_css: "css/content.css",

            // Drop lists for link/image/media/template dialogs
            template_external_list_url: "lists/template_list.js",
            external_link_list_url: "lists/link_list.js",
            external_image_list_url: "lists/image_list.js",
            media_external_list_url: "lists/media_list.js",

            // Style formats
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],

            // Replace values for the template plugin
            template_replace_values: {
                username: "Some User",
                staffid: "991234"
            }
        });
    </script>

    <!-- MAIN CONTAINER -->
<?php
$proimage = "";
$proname = "";
$proprice = "";
$procat = "";
$prodes = "";
$proqty = "";
$res = mysqli_query($link, "select * from products where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $proimage = $row["product_img"];
    $proname = $row["product_name"];
    $proprice = $row["product_price"];
    $procat = $row["category"];
    $prodes = $row["product_descriptions"];
    $proqty = $row["product_qty"];
}

?>
    <main id="main-container">
        <div class="content">
            <h2 class="content-heading" style="margin-top: -10px">Editar Producto</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card" style="padding:10px">

                        <form class="col-md-8" name="form1" action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="productname" class="col-form-label">Producto Categoria</label>
                                    <select class="form-control" name="category">
                                        <?php
                                        $res = mysqli_query($link, "select * from category");
                                        while ($row = mysqli_fetch_array($res))
                                        {
                                        ?>
                                        <option <?php if ($procat == $row["category_name"]) {
                                            echo "selected";
                                        } ?>>
                                            <?php

                                            echo $row["category_name"];
                                            echo "</option>";
                                            }

                                            ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productname" class="col-form-label">Producto</label>
                                    <input type="text" class="form-control" name="productname"
                                           placeholder="Nombre del Producto" required value="<?php echo $proname; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productprice" class="col-form-label">Precio del producto</label>
                                    <input type="text" class="form-control" name="productprice"
                                           placeholder="Precio" required value="<?php echo $proprice; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <?php
                                    echo "<table>";
                                    echo "<tr>";
                                        echo "<td>";
                                        ?>
                                        <img src="<?php echo $proimage; ?>" height="100" width="100"><br>
                                        <?php
                                        echo "</td>";
                                    echo "</tr>";
                                    echo "</table>";
                                    ?>
                                </div>
                                <div class="form-group col-md-12" style="text-align: left">
                                    <label for="productimage" class="col-form-label">Imagen del producto</label><br>
                                    <input type="file" id="" class="btn btn-primary default-btn-color" name="image_path" >

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productqty" class="col-form-label">Cantidad</label>
                                    <input type="text" class="form-control" name="productqty"
                                           placeholder="Cantidad" required value="<?php echo $proqty; ?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputdescription" class="col-form-label">Descripcion del producto</label>
                                    <textarea class="form-control" name="description"
                                              id="elm1"><?php echo $prodes; ?></textarea>

                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary default-btn-color" name="submit1"
                                            id="submit">Actualizar producto
                                    </button>
                                </div>
                                <div class="alert alert-success col-md-12" id="d11" style="display: none;">
                                    <strong>Éxito!</strong> Actualización del producto realizada con éxito.
                                </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <!-- .content -->
    </main>

<?php
if (isset($_POST["submit1"])) {


    $tm = md5(time());
    $fnm = $_FILES["image_path"]["name"];
    $dst = "images/" . $tm . $fnm;
    $dst1 = "images/" . $tm . $fnm;
    move_uploaded_file($_FILES["image_path"]["tmp_name"], $dst);

if($fnm=="")
{
    mysqli_query($link, "update products set category='$_POST[category]',product_name='$_POST[productname]',product_price='$_POST[productprice]',product_qty='$_POST[productqty]',product_descriptions='$_POST[description]' where id=$id")  or die(mysqli_error($link));
}
    else {
        mysqli_query($link, "update products set product_img='$dst1', category='$_POST[category]',product_name='$_POST[productname]',product_price='$_POST[productprice]',product_qty='$_POST[productqty]',product_descriptions='$_POST[description]' where id=$id")  or die(mysqli_error($link));
    }
    ?>
    <script type="text/javascript">

    document.getElementById("d11").style.display = "block";
            setTimeout(function () {
                window.location = "view_product.php";

            }, 1000);


        </script>
        <?php
}


?>


<?php
include "footer.php";
?>