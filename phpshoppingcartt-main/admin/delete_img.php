<?php
include "connection.php";
$id=$_GET["id"];
$pid=$_GET["pid"];
mysqli_query($link,"delete from product_images where id=$id");
?>

<script type="text/javascript">
    window.location="edit_product.php?id=<?php echo $pid; ?>";
</script>
