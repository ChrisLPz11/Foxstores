<?php
session_start();
include "header.php";

if(!isset($_SESSION["address_verify"]) || !isset($_SESSION["checkout"]) || !isset($_SESSION["orderno"]) || !isset($_SESSION['email']))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
else {
    ?>



    <!-- this is for display records-->
    <div class="row" style="margin: 0px; padding:0px; margin-top: -20px; min-height: 500px">
<center>
        <div class="col-lg-12" style="margin-top: 150px;">
            <img src="admin/images/right1.png">
            <h2 style="color:green">¡Felicitaciones! Su pedido se realizó exitosamente!</h2>
        </div>
</center>

    </div>
    <?php
}
?>

    <div class="clear"></div>
<?php
unset($_SESSION["address_verify"]);
unset($_SESSION["checkout"]);
unset($_SESSION["orderno"]);
unset($_SESSION['email']);
unset($_SESSION["orderno"]);

include "footer.php";
?>