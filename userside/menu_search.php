<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");
$output='';
?>


<div class="container">
  <table width="90%" border="0" align="middle">
      <tr style="padding-top: 0px;">
        <td>
          <?php
          include "menu.php";
          ?>
        </td>
        <td style="padding: 0 px;width: 78%;vertical-align: top;">
      <div id="heading-block">
          <h2>Products</h2>
          <div class="prod-container">

<?php
		  $res=mysqli_query($link,"SELECT * FROM product");
          if(isset($_POST['menu_submit'])){
            $q1 = $_POST['min'];
            $q2=$_POST['max'];
            $query = mysqli_query($link,"SELECT * FROM product WHERE product_price BETWEEN $q1 AND $q2"); 
            $count = mysqli_num_rows($query);
            if($count == "0"){
              $output = '<h2>No result found!</h2>';
            }else{
              while($row = mysqli_fetch_array($query)){
              $s = $row['id']; 
                  $output =$s;
                  if($row["id"]==$s) {
		?>  

            <div class="pbox">
                <img src="../admin/<?php echo $row["product_image"]; ?>">
            	<div class="prod-trans">
              		<div class="prod-feature">
                		<p><?php echo $row["product_name"]; ?></p>
                		<p style="color: white;"><b><?php
                            echo 'Rs.'.$row["product_price"];
                          ?><b></p>
                    <input type="button" name="" value="Add to Cart">
                		<a href="product_desc.php?id=<?php echo $row["id"];?>"><input type="button" name="" value="More Description"></a>
              		</div>
              	</div>
            </div>
<?php
}
}
                }
              }

          ?>
     
     
     



  </div>
</div>
</td>
</tr>
</table>
<?php
 include "footer.php";
 ?>
  </div>

</body>

</html>