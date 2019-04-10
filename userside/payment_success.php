<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shop");

$order_id=$_GET["id1"];
?>
<?php
$res=mysqli_query($link,"SELECT * FROM checkout_address WHERE id=$order_id");
while ($row=mysqli_fetch_array($res)) {
	$fname=$row["firstname"];
	$lname=$row["lastname"];
	$country=$row["country"];
	$address=$row["address"];
	$town=$row["town"];
	$pincode=$row["postcode"];
	$email=$row["email"];
	$contactno=$row["phone"];
}
@mysqli_query($link,"INSERT INTO confirm_order_address(firstname,lastname,country,address,town,postcode,email,phone) VALUES('$fname','$lname','$country','$address','$town','$pincode','$email','$contactno')");

$res1=@mysqli_query($link,"SELECT id from confirm_order_address ORDER BY id DESC LIMIT 1");
while ($row=mysqli_fetch_array($res1)) {
	$id=$row["id"];
}
foreach ($_COOKIE['item'] as $name1 => $value) {
	$value11=explode("_",$value);
	@mysqli_query($link,"INSERT INTO confirm_order_product(order_id,product_name,product_price,product_qty,product_image,product_total) VALUES($id,'$value11[1]',$value11[2],$value11[3],'$value11[0]',$value11[4])");
}

echo "your order get successfully we deliver product soon";

?>

<script type="text/javascript">
	setTimeout(function(){
		window.location="main.php";
	},3000);
</script>