<?php
session_start();
include "header.php";
?>
<div class="main-wrapper clearfix">
<?php
include "slider.php";
?>



    <section class="gst-spc1">
        <div class="container">
            <div class="">
                <div class="col-md-12" style="min-height: 300px;">
                    <div class="" id="best-seller">
                        <?php
                          $count=0;

                        if(isset($_GET["search"]))
                        {
                            $res=mysqli_query($link,"select * from products where product_name like('%$_GET[search]%')");
                            $count=mysqli_num_rows($res);
                        }

                           if(isset($_GET["category"]))
                           {
                               $res=mysqli_query($link,"select * from products where category='$_GET[category]'");
                               $count=mysqli_num_rows($res);
                           }
                           else if(!isset($_GET["search"]) && !isset($_GET["category"]))
                           {
                            $res=mysqli_query($link,"select * from products");
                               $count=mysqli_num_rows($res);
                           }



                           if($count==0)
                           {
                               echo "<center>";
                               echo "<h1>";
                               echo "No Record Found";
                               echo "</h1>";
                               echo "</center>";
                           }


                            while($row=mysqli_fetch_array($res))
                            {
                                ?>
                                <div class="item col-md-3" >

                                    <div class="col-lg-12" style="border-style:solid; border-width: 1px; border-color:silver; border-radius:5px; margin-top:5px;">

                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-thumb">
                                            <img src="admin/<?php echo $row["product_img"];?>" style="width: 270px; height: 285px;">

                                            <div class="portfolio-content">
                                                <div class="pop-up-icon">
                                                    <a class="center-link" href="product_desc.php?id=<?php echo $row["id"];?>"><i
                                                            class="cart-icn"> </i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a class="title-2 fsz-18" href="product_desc.php?id=<?php echo $row["id"];?>" style="text-transform: none"><?php echo $row["product_name"];?></a></h3>

                                            <p class="font-2">Precio:<span class="thm-clr"> $<?php echo $row["product_price"];?> </span></p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php
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