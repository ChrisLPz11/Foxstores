<?php
include "header.php";
?>
    <div class="main-wrapper clearfix">

        <section class="gst-spc1">
            <div class="container">
                <div class="">
                    <div class="col-md-12">
                        <div class="" id="best-seller" style="min-height: 300px;">

                            <?php
                            $res1=mysqli_query($link,"select * from about_contact_title");
                            while($row1=mysqli_fetch_array($res1))
                            {
                                echo $row1["about"];
                            }
                            ?>

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