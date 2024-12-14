<?php
include "admin/connection.php";
?>
<div id="owl-carousel-main" class="owl-carousel nav-1">
    <?php
    $res1=mysqli_query($link,"select * from photo_gallery");
    while($row1=mysqli_fetch_array($res1))
    {
        ?>
    <div class="gst-slide">
        <img src="admin/<?php echo $row1["image_path"]?>" alt=""/>
        <div class="gst-caption container theme-container">
            <div>

            </div>
        </div>
    </div>
        <?php
    }
    ?>

</div>