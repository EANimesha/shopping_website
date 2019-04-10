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
		<h1>Display Orders</h1>
    <div>
      <?php
      $res=mysqli_query($link,"SELECT * FROM confirm_order_address ORDER BY id DESC");
      echo "<table>";
      echo "<tr>";
      echo "<td>";echo "id";echo "</td>";
      echo "<td>";echo "firstname";echo "</td>";
      echo "<td>";echo "lastname";echo "</td>";
      echo "<td>";echo "country";echo "</td>";
      echo "<td>";echo "address";echo "</td>";
      echo "<td>";echo "town";echo "</td>";
      echo "<td>";echo "postcode";echo "</td>";
      echo "<td>";echo "email";echo "</td>";
      echo "<td>";echo "phone";echo "</td>";
      echo "</tr>";
      while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>";echo "</td>";
        echo "</tr>";
      }
      echo "<table>"; 
      ?> 
</div>
</div>
	
</body>
</html>