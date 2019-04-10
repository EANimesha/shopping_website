<?php
	include "header.php";
?>
<?php
$id=$_GET["id"];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");

if (isset($_POST["submit1"])) {
	$d=0;
	if (is_array($_COOKIE['item'])) {
		foreach ($_COOKIE['item'] as $name => $value) {
			$d=$d+1;
		}
		$d=$d+1;
	}
	else{
		$d=$d+1;
	}

	$res3=mysqli_query($link,"SELECT * FROM product WHERE id=$id");
	while ($row3=mysqli_fetch_array($res3)) {
		$img1=$row3["product_image"];
		$nm=$row3["product_name"];
		$prize=$row3["product_price"];
		$qty=$_POST["qinput"];
		$total=$prize*$qty;
	}

	if (is_array($_COOKIE['item'])) {
		foreach ($_COOKIE['item'] as $name1 => $value) {
			$value11=explode("_", $value);
			$found=0;
			if($value11[0]==$img1) {  
				$found=$found+1;
				$qty=$value11[3]+$qty;//

				$tb_qty;
				$res=mysqli_query($link,"SELECT * FROM product WHERE product_image='$img1'");
				while ($row=mysqli_fetch_array($res)) {
					$tb_qty=$row["product_qty"];
				}
				if($tb_qty<$qty){
					?>
					<script type="text/javascript">
						alert("This much quantity not available");
					</script>
					<?php
				}else{
					$total=$value11[2]*$qty;
				setcookie("item[$name1]",$img1."_".$nm."_".$prize."_".$qty."_".$total,time()+1800);
				$res=mysqli_query($link,"UPDATE product SET product_qty=product_qty-$qty WHERE id=$id");
				}
			}
		}
		if ($found==0) {
			$tb_qty;
				$res=mysqli_query($link,"SELECT * FROM product WHERE product_image='$img1'");
				while ($row=mysqli_fetch_array($res)) {
					$tb_qty=$row["product_qty"];
				}
				if($tb_qty<$qty){
					?>
					<script type="text/javascript">
						alert("This much quantity not available");
					</script>
					<?php
				}else{
			setcookie("item[$d]",$img1."_".$nm."_".$prize."_".$qty."_".$total,time()+1800);
			$res=mysqli_query($link,"UPDATE product SET product_qty=product_qty-$qty WHERE id=$id");
				}
		}
	}
	else{
		$tb_qty;
				$res=mysqli_query($link,"SELECT * FROM product WHERE product_image='$img1'");
				while ($row=mysqli_fetch_array($res)) {
					$tb_qty=$row["product_qty"];
				}
				if($tb_qty<$qty){
					?>
					<script type="text/javascript">
						alert("This much quantity not available");
					</script>
					<?php
				}else{
		        setcookie("item[$d]",$img1."_".$nm."_".$prize."_".$qty."_".$total,time()+1800);
				}
	}
}

?>
<div class="container">
      <div id="heading-block">
          <h2>Product Description</h2>
          <div class="prod-container">
          	<?php
          	$res=mysqli_query($link,"SELECT * FROM product WHERE id=$id");
			while($row=mysqli_fetch_array($res)){
			?>
			<form action="" method="post" name="form1">
			<div class="prod-desc" style="width: 1500px;">
          		<div class="pimage" width="25%">
					<img src="../admin/<?php echo $row["product_image"]; ?>" width="250px" height="250px">
				</div>
				<div class="pdesc" width="73%">
					<p style="color: black"><b><?php echo $row["product_name"]; ?></b></p>
					<p style="color: black">Product Price:<b><?php echo $row["product_price"]; ?></b></p>
					<p style="color: black">Product Quantity Remain:<b><?php echo $row["product_qty"]; ?></b></p>
					<p style="color: black">Product Description:<b><?php echo $row["product_d"]; ?></b></p>

					Quantity<input type="text" name="qinput">
					<button type="submit" name="submit1">Add to cart</button>
				</div>
          	</div>
          	</form>
			<?php	
			}
			?>
		  </div>
	   </div>
	   <?php
 include "footer.php";
 ?>
</div>
</body>
</html>>