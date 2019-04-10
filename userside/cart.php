<?php 
session_start();
?>
<?php
if (is_array($_COOKIE['item'])) {
	foreach ($_COOKIE['item'] as $name1 => $value) {
		if (isset($_POST['delete$name1'])) {
			setcookie(item[$name1],"",time()-1800);
			?>
			<script type="text/javascript">
				window.location.href=window.location.href;
			</script>
			<?php
		}
	}
}
 ?>
<?php
include "header.php";
?>

<div class="container">
					<div id="heading-block">
         				 <h2>My Cart</h2>
          			</div>
          			<div id="heading-block">
          								<table border="1" align="center" style="color: black">
								        <?php
								        $d=0;
								        if (is_array($_COOKIE['item'])) {
								        	$d=$d+1;
								        }
								        if ($d==0) {
								        	echo "No record in the cart";
								        }
								        else{
								        	?>
								        	
								        	 <tr>
								          <th></th>
								          <th>Details</th>
								          <th>Price</th>
								          <th>Quantity</th>
								          <th>Subtotal</th>
								          <th>Delete</th>
								        </tr>

								        	<?php
								        		foreach ($_COOKIE['item'] as $name1 => $value) {
												  $value11=explode("_", $value);
												  ?>
												  	<tr>
								             		<td><img src="../admin/<?php echo $value11[0]; ?>" alt=""  width="150px" height="150px"></td>
								          			<td><h6><?php echo $value11[1]; ?></h6>
								          		<td>Rs.<?php echo $value11[2]; ?></td>
								          		<td><input type="text" name="" value="<?php echo $value11[3]; ?>"  size="1" readonly></td>
								          		<td>Rs.<?php echo $value11[4]; ?></td>
								          		<td><input type="submit" name="delete<?php echo $name1; ?>" value="X"></td>
								      			</tr>
												  <?php
												}
								        	?>
								        	 
								      	</table>
								        	<?php
								        	$tot=0;
								        	foreach ($_COOKIE['item'] as $name1 => $value) {
												  $value11=explode("_", $value);
												  $tot=$tot+$value11[4];
											}
											
								        }
								        echo "rs.".$tot;
											$_SESSION["pay"]=$tot;
								        ?>
								   
          			</div>

          			<div id="heading-block">
									<div style="color: black" align="center">
										<h3>Cart totals</h3>
										<p>Cart Subtotal: <span>Rs.</span></p>
										<p>Shipping and Handling: <span>Rs.</span></p>
										<p class="bd0"><strong>Order Total: <span>Rs.<?php echo $tot ?></span></strong></p>
										<a href="checkout.php">
										<input type="button" name="button1" value="CheckOut">
										</a>
									</div>
					</div>


</div>

</body>

</html>