<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");
$id=$_GET["id"];
mysqli_query($link,"DELETE FROM product WHERE id=$id");
?>
<script type="text/javascript">
	window.location="display_items.php";
</script>