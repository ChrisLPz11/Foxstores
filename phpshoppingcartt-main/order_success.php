<?php
session_start();
include "admin/connection.php";


if(!isset($_SESSION["address_verify"]) || !isset($_SESSION["checkout"]) || !isset($_SESSION["orderno"]))
{
    ?>
<script type="text/javascript">
    window.location="index.php";
</script>
<?php
}
else if($_SESSION["orderno"]!=$_GET["orderno"])
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php

}
else {
    $_SESSION["orderdone"] = "yes";


    ?>
    <?php
    date_default_timezone_set('Europe/London');
    $date = date("d/m/y");
    $time = date("h:m:s");
    $read = "n";
    mysqli_query($link, "insert into order_user(id,user_email, orderno, purchase_date,purchase_time) values(NULL,'$_SESSION[email]','$_GET[orderno]','$date','$time')") or die(mysqli_error($link));
    $res1 = mysqli_query($link, "select * from order_user order by id desc limit 1");
    while ($row1 = mysqli_fetch_array($res1)) {
        $order_id = $row1['id'];
    }
    if (isset($_COOKIE['item'])) {
        foreach ($_COOKIE['item'] as $name => $value) {
            $values = explode("__", $value);
            $img = $values[0];
            $title = $values[1];
            $price = $values[2];
            $qty = $values[3];
            $sub_tot = round($price * $values[3],2);
            $title = mysqli_real_escape_string($link, $title);
            mysqli_query($link, "insert into order_item(id, order_id, product_id, product_name, product_price, product_images, product_qty) values(NULL,'$order_id','$values[5]','$title','$price','$img','$qty')") or die(mysqli_error($link));
            mysqli_query($link,"update products set product_qty=product_qty-$qty where id=$values[5]");
        }
    }
    if (isset($_COOKIE['item'])) {
        foreach ($_COOKIE['item'] as $name => $value) {
            setcookie("item[$name]", "", time() - 3600);
        }
    }
}
//logic ends here

?>
    <script type="text/javascript">
        window.location="order_complete_msg.php";
    </script>