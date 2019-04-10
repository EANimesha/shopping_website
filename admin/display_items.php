<!DOCTYPE html>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");
?>

<?php
include "header.php"
?>
<div class="container">
	<div id="heading-block">
		<h2>Order Items</h2>
    <div>
      <?php
      $res=mysqli_query($link,"SELECT * FROM product ");
      echo "<table border=1";
      echo "<tr>";
      echo "<th>";echo "product image";echo "</th>";
      echo "<th>";echo "product name";echo "</th>";
      echo "<th>";echo "product category";echo "</th>";
      echo "<th>";echo "product price";echo "</th>";
      echo "<th>";echo "product Quantity";echo "</th>";
      echo "<th>";echo "Delete";echo "</th>";
      echo "<th>";echo "Edit Item";echo "</th>";
      echo "</tr>";
      while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
            echo "<td>";?><img src="<?php echo $row["product_image"];?>" height="100px" width="100px"><?php echo "</td>";
            echo "<td>";echo $row["product_name"];echo "</td>";
            echo "<td>";echo $row["product_category"];echo "</td>";
            echo "<td>";echo $row["product_price"];echo "</td>";
            echo "<td>";echo $row["product_qty"];echo "</td>";
            echo "<td>";?><a href="delete.php?id=<?php echo $row["id"] ?>">Delete</a><?php echo "</td>";
            echo "<td>";?><a href="edit.php?id=<?php echo $row["id"] ?>">Edit Item</a><?php echo "</td>";
        echo "</tr>";
      }
      echo "<table>"; 
      ?> 
</div>
</div>
	
</body>
</html>