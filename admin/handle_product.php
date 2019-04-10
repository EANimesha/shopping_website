<?php
$dbc=mysqli_connect('localhost','root','','shop') or die ('Error connecting to database'.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');
mysqli_select_db($dbc,'shop');
?>

 				<?php
                    if (isset($_POST["submit"])) {
                    
                        $fnm=$_FILES['pimage']['name'];
                        $dst="./uploads/".$fnm;
                        move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
                    }?>
                    <?php
                    $a=trim($_REQUEST['pname']);
                    $b=($_REQUEST['pp']);
                    $c=($_REQUEST['pq']);
                    $d=trim($dst);
                    $e=trim($_REQUEST['pcatgory']);
                    $f=trim($_REQUEST['pdesc']);
                    $q="INSERT INTO product (product_name,product_price,product_qty,product_image,product_category,product_d) VALUES('$a','$b','$c','$d','$e','$f')";
                    $r=@mysqli_query($dbc,$q);
                        ?>
<script type="text/javascript">
	window.location="add_product.php";
</script>