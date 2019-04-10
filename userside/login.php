<!DOCTYPE html>
<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop")
?>

<?php
include "header.php"
?>
<div class="container">
	<div id="heading-block">
		<form class="form-signin" name="form1" action="" method="post" class="form1">
  			<h1>Admin sign in</h1>
  			<label for="inputEmail" class="sr-only">Email address</label>
  			<input type="text" id="inputname" placeholder="Email address"><br>

  			<label for="inputPassword" >Password</label>
  			<input type="password" id="inputPassword" placeholder="Password" ><br>

  		
  		<button type="submit" name="submit1">Login</button>
      <button type="submit" name="submit2">Create Account</button>
</form>
</div>
</div>
	<!-- <?php  
 		if (isset($_POST["submit1"])) {
 			$res=mysqli_query($link,"SELECT * FROM adminlogin WHERE username='$_POST[username]' AND password='$_POST[pwd]'");
 			while($row=mysqli_fetch_array($res)){
 				$_SESSION["admin"]=$row["username"];
 				?>
 				<script type="text/javascript">
 					window.location="add_product.php";
 				</script>
 				<?php
 			}
 		}

?> -->
<?php  
    if (isset($_POST["submit2"])) {
    ?>
        <script type="text/javascript">
          window.location="signin.php";
        </script>
        <?php
  }
?>
</body>
</html>