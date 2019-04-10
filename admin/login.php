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
	<div id="heading-block" style="display: inline-block;">
    <div style="float: left;margin-left: 300px;">
		<form class="form-signin" name="form1" action="" method="post">
  			<h1>Admin sign in</h1>
  			<label for="inputEmail" class="sr-only">Email address</label>
  			<input type="text" id="inputname" placeholder="Email address" required name="username"><br>

  			<label for="inputPassword" >Password</label>
  			<input type="password" id="inputPassword" placeholder="Password" required name="pwd"><p>

  		
  		<input type="submit" name="submit1" value="Sign in"></input>
</form>
</div>
<div style="float:right;margin: 20px 350px auto auto">
  <img src="uploads/login.jpg">
</div>
</div>
</div>
	<?php  
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

?>
</body>
</html>