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

    <!-- MAIN CONTAINER -->
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <!-- Item sold -->
                    <div class="card stats-card">
                        <div class="stats-icon">
                            <span class="ti-bag"></span>
                        </div>
                        <div class="stats-ctn">
                            <?php

                            $total_order=0;
                            $res=mysqli_query($link,"select * from order_user");
                            $total_order=mysqli_num_rows($res);
							
                            ?>
                            <div class="stats-counter"><span class="counter"><?php echo $total_order;?></span></div>
                            <span class="desc">Orden Total</span>
                        </div>
                    </div><!-- .card -->
                    <!-- /End Item sold -->

                </div><!-- .col -->
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <!-- Earnings -->
                    <div class="card stats-card">
                        <div class="stats-icon">
                            <span class="ti-user"></span>
                        </div>
                        <div class="stats-ctn">
                            <?php

                            $count=0;
                            $res=mysqli_query($link,"select * from signup");
                            while($row=mysqli_fetch_array($res))
                            {
                               $count=$count+1;

                            }
                            ?>
                            <div class="stats-counter"><span class="counter"><?php echo $count;?></span></div>
                            <span class="desc">Usuario</span>
                        </div>
                    </div><!-- .card -->
                    <!-- /End Earnings -->

                </div><!-- .col -->
                <!-- .col -->
                <!-- .col -->
            </div>
        </div>

<!-- .content -->
</main>

<?php
include "footer.php";
?>