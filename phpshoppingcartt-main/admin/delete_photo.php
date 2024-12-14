<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from photo_gallery where id=$id");

?>
<script type="text/javascript">
    window.location="add_photo.php";
</script>
