<?php
session_start();
?>
<?php
include "header.php";

?>



	<div class="container" id="heading-block" style="color: black">
		<h2 > BILLING INFORMATION</h2>
		<form name="form1" action="" method="POST" class="form1" >
			<input type="text" name="firstname" placeholder="First Name"><br>
			<input type="text" name="lastname" placeholder="Last Name"><br>
			<input type="text" name="country" placeholder="country"><br>
			<input type="text" name="address" placeholder="address"><br>
			<input type="text" name="town" placeholder="town"><br>
			<input type="text" name="postcode" placeholder="postcode"><br>
			<input type="email" name="email" placeholder="email"><br>
			<input type="text" name="contact" placeholder="contact no"><br>
			<input type="submit" name="submit2" value="Submit">
		</form>
		
	</div>


<?php 
		if (isset($_POST["submit2"])) {
			$dbc=mysqli_connect("localhost","root","");
			mysqli_select_db($dbc,"shop");

                    $a=trim($_REQUEST['firstname']);
                    $b=trim($_REQUEST['lastname']);
                    $c=trim($_REQUEST['country']);
                    $d=trim($_REQUEST['address']);
                    $e=trim($_REQUEST['town']);
                    $f=($_REQUEST['postcode']);
                    $g=trim($_REQUEST['email']);
                    $h=($_REQUEST['contact']);
                    $q="INSERT INTO checkout_address (firstname,lastname,country,address,town,postcode,email,phone) VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
                    $r=@mysqli_query($dbc,$q);


                    $res=@mysqli_query($dbc,"SELECT id FROM checkout_address ORDER BY id desc limit 1");
                    while ($row=mysqli_fetch_array($res)) {
                        $_SESSION["order_id"]=$row["id"];
                    }

			?>
			<script type="text/javascript">
				alert("You have submitted successfully");
			</script>
			<script type="text/javascript">
                            alert("click ok to transfer to you in paypal");

                            setTimeout(function(){
                                window.location="paypal.php";
                            },4000);
                        </script>
			<?php
		}
?>
</body>

</html>