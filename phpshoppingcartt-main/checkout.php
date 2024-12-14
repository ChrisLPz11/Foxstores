<?php
session_start();
include "admin/connection.php";
?>
<?php
if(!isset($_SESSION["cart_count"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>

    <?php

}
else if($_SESSION["cart_count"]==0)
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>

    <?php
}
else
{
    $_SESSION["checkout"]="yes"; //this is for login page is value is available then after login forward in checkout pricess otherwise on dashboard
    $_SESSION["cart_item"]="yes";
    if(!isset($_SESSION['email']))
    { ?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
        <?php
    }

    else
    { ?>
        <script type="text/javascript">
            window.location="addres_verification.php";
        </script>
        <?php
    }
}
?>

