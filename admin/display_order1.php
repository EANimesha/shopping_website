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
		<h2>Order Items</h2>
    <div>
      <?php
      $id=$_GET["id"];
      $res=mysqli_query($link,"SELECT * FROM confirm_order_product WHERE order_id=$id");
      echo "<table border=1>";
      echo "<tr>";
      echo "<th>";echo "product image";echo "</th>";
      echo "<th>";echo "product name";echo "</th>";
      echo "<th>";echo "product price";echo "</th>";
      echo "<th>";echo "product Quantity";echo "</th>";
      echo "<th>";echo "Product Total";echo "</th>";
      echo "</tr>";
      while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>";?><img src="<?php echo $row["product_image"];?>" height="100px" width="100px"><?php echo "</td>";
            echo "<td>";echo $row["product_name"];echo "</td>";
            echo "<td>";echo $row["product_price"];echo "</td>";
            echo "<td>";echo $row["product_qty"];echo "</td>";
            echo "<td>";echo $row["product_total"];echo "</td>";
        echo "</tr>";
      }
      echo "<table>"; 
      ?> 
</div>
</div>
	
</body>
</html>