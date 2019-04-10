<?php
  session_start();
  if($_SESSION["admin"]=="")
  {
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
  }
  include "header.php";

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");
$id=$_GET["id"];
$res=mysqli_query($link,"SELECT * FROM product WHERE id=$id");
while($row=mysqli_fetch_array($res)){
    $product_name=$row["product_name"];
    $product_price=$row["product_price"];
    $product_qty=$row["product_qty"];
    $product_img=$row["product_image"];
    $product_cat=$row["product_category"];
    $product_desc=$row["product_d"];
}
?>

   <div class="container">
      <div id="heading-block" >
        <h2>Edit Items</h2>
        <form name="form1" action="" method="POST" enctype="multipart/form-data">
                        <table border=1>
                            <tr>
                                <td colspan="2" align="center">
                                   <img src="<?php echo $product_img ; ?>" height="100" width="100"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Product Name</td>
                                <td><input type="text" name="pname" value="<?php echo $product_name ; ?>"></td>
                            </tr>
                            <tr>
                                <td>Product Price</td>
                                <td><input type="text" name="pp" value="<?php echo $product_price ; ?>"></td>
                            </tr>
                            <tr>
                                <td>Product Quantity</td>
                                <td><input type="text" name="pq" value="<?php echo $product_qty ; ?>"></td>
                            </tr>
                            <tr>
                                <td>Product Image</td>
                                <td><input type="file" name="pimage" value="<?php echo $product_img ; ?>"></td>
                            </tr>
                            <tr>
                                <td>Product category</td>
                                <td>
                                    <input type="text" name="pcategory" value="<?php echo $product_cat; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Product Description</td>
                                <td>
                                    <textarea name="pdesc" width="50px" height="400px" value="<?php echo $product_desc ; ?>"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit1" value="update">
                            </tr> 
                        </form>
                    
   </div>    
 </div>

 <?php
 if (isset($_POST["submit1"])) {
     $fnm=$_FILES["pimage"]["name"];
     if ($fnm=="") {
         mysqli_query($link,"UPDATE product SET product_name='$_POST[pname]',product_price='$_POST[pp]',product_qty='$_POST[pq]',product_category='$_POST[pcategory]',product_d='$_POST[pdesc]' WHERE id=$id;");
     }else{
        $dst="./uploads/".$fnm;
        move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

        mysqli_query($link,"UPDATE product SET product_image='$dst',product_price='$_POST[pp]',product_qty='$_POST[pq]',product_category='$_POST[pcategory]',product_d='$_POST[pdesc]' WHERE id=$id;");
     }
     ?>
     <script type="text/javascript">
    window.location="display_items.php";
    </script>
     <?php
 }

 ?>

</body>
</html>