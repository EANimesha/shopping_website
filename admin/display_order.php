<!DOCTYPE html>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop")
?>

<?php
include "header.php"
?>
<div class="container">
	<div id="heading-block">
		<h2>Display Orders</h2>
    <div>
      <?php
      $res=mysqli_query($link,"SELECT * FROM confirm_order_address ORDER BY id DESC");
      echo "<table border=1>";
      echo "<tr>";
      echo "<th>";echo "firstname";echo "</th>";
      echo "<th>";echo "lastname";echo "</th>";
      echo "<th>";echo "country";echo "</th>";
      echo "<th>";echo "address";echo "</th>";
      echo "<th>";echo "town";echo "</th>";
      echo "<th>";echo "postcode";echo "</th>";
      echo "<th>";echo "email";echo "</th>";
      echo "<th>";echo "phone";echo "</th>";
      echo "<th>";echo "view order";echo "</th>";
      echo "</tr>";
      while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
      echo "<td>";echo $row["firstname"];echo "</td>";
      echo "<td>";echo $row["lastname"];echo "</td>";
      echo "<td>";echo $row["country"];echo "</td>";
      echo "<td>";echo $row["address"];echo "</td>";
      echo "<td>";echo $row["town"];echo "</td>";
      echo "<td>";echo $row["postcode"];echo "</td>";
      echo "<td>";echo $row["email"];echo "</td>";
      echo "<td>";echo $row["phone"];echo "</td>";
      echo "<td>";?><a href="display_order1.php?id=<?php echo $row["id"];?>">View Order</a><?php echo "</td>";
        echo "</tr>";
      }
      echo "<table>"; 
      ?> 
</div>
</div>
	
</body>
</html>