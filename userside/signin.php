<?php
include "header.php";
//$link=mysqli_connect("localhost","root","");
//mysqli_select_db($link,"shop");
?>



	<div class="container" id="heading-block" style="color: black">
		<h2 >CREATE NEW ACCOUNT</h2>
		<form name="form3" action="handle_checkout.php" method="post" enctype="multipart/form-data">
			<input type="text" name="firstname" placeholder="First Name"><br>
			<input type="text" name="lastname" placeholder="Last Name"><br>
			<input type="text" name="country" placeholder="country"><br>
			<input type="text" name="address" placeholder="address"><br>
			<input type="text" name="town" placeholder="town"><br>
			<input type="text" name="postcode" placeholder="postcode"><br>
			<input type="email" name="email" placeholder="email"><br>
			<input type="text" name="contact" placeholder="contact no"><br>
			<input type="submit" name="submit1" value="Submit">
		</form>
		<?php /*
		if (isset($_POST["submit1"])) {
			mysqli_query($link,"INSERT INTO checkout_address(firstname,lastname,country,address,town,postcode,email,phone) VALUES($_POST[firstname]','$_POST[lastname]','$_POST[country]','$_POST[address]','$_POST[town]','$_POST[postcode]','$_POST[email]','$_POST[contact]')");
			?>
			<script type="text/javascript">
				alert("You have submitted successfully");
			</script>
			<?php
		}*/
?>
	</div>

</body>

</html>