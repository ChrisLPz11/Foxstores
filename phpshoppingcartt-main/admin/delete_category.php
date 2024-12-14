<?php
include "connection.php";
$id=$_GET["id"];

$category="";
$res=mysqli_query($link,"select * from category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $category=$row["category_name"];
}

mysqli_query($link,"delete from products where category='$category'");
mysqli_query($link,"delete from category where id=$id");

?>
<script type="text/javascript">
    window.location="category.php";
</script>
