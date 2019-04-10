
<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");
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
while($row=mysqli_fetch_array($res))
{
  if($row["product_category"]==1) {
?>  

            <div class="pbox">
                <img src="../admin/<?php echo $row["product_image"]; ?>">
            	<div class="prod-trans">
              		<div class="prod-feature">
                		<p><?php echo $row["product_name"]; ?></p>
                		<p style="color: white;"><b><?php
                            echo 'Rs.'.$row["product_price"];
                          ?><b></p>
                		<a href="product_desc.php?id=<?php echo $row["id"];?>"><input type="button" name="" value="More Description"></a>
              		</div>
              	</div>
            </div>
<?php
}
}
  ?>
  </div>
</div>
</td>
</tr>
</table>

<div><center>
        <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
      </center></div>
<?php
 include "footer.php";
 ?>
  </div>

</body>

</html>