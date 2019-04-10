<?php 
session_start();
 ?>
<?php
$dbc=mysqli_connect('localhost','root','','shop') or die ('Error connecting to database'.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');
mysqli_select_db($dbc,'shop');
?>

 				<?php
                    if (isset($_POST["submit1"])) {
                   
                    $a=trim($_REQUEST['firstname']);
                    $b=trim($_REQUEST['lastname']);
                    $c=trim($_REQUEST['country']);
                    $d=trim($_REQUEST['address']);
                    $e=trim($_REQUEST['town']);
                    $f=($_REQUEST['postcode']);
                    $g=trim($_REQUEST['email']);
                    $h=($_REQUEST['contact']);
                    $q="INSERT INTO checkout_address (firstname,lastname,country,address,town,postcode,email,phone) VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
                    $r=@mysqli_query($dbc,$q);
                    
                    $res=mysqli_query($dbc,"SELECT id FROM checkout_address ORDER BY id desc limit 1");
                    while ($row=mysqli_fetch_array($res)) {
                        $_SESSION["order_id"]=$row["id"];
                    }

                    ?>
                        <script type="text/javascript">
                            alert("click ok to transfer to you in paypal");

                            setTimeout(function(){
                                window.location="paypal.php";
                            },4000);
                        </script>
                    <?php

                 }?>
<!-- <script type="text/javascript">
	window.location="checkout.php";
</script> -->