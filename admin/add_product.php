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
  include "header.php"
?>

   <div class="container">
      <div id="heading-block" >
        <h2>Add Product</h2>
         <form name="form2" action="handle_product.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Product Name</td>
                                <td><input type="text" name="pname"></td>
                            </tr>
                            <tr>
                                <td>Product Price</td>
                                <td><input type="text" name="pp"></td>
                            </tr>
                            <tr>
                                <td>Product Quantity</td>
                                <td><input type="text" name="pq"></td>
                            </tr>
                            <tr>
                                <td>Product Image</td>
                                <td><input type="file" name="pimage"></td>
                            </tr>
                            <tr>
                                <td>Product category</td>
                                <td>
                                    <select name="pcatgory">
                                        <option value="1">Men Fashion</option>
                                        <option value="2">Women Fashion</option>
                                        <option value="3">Shoe</option>
                                        <option  value="4">Accesories</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Product Description</td>
                                <td>
                                    <textarea name="pdesc" width="50px" height="400px"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit" value="upload">
                            </tr> 
                        </table>
                    </form>
   </div>    
 </div>
</body>
</html>