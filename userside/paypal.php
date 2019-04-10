<?php
session_start();
?>
<h1>Please wait we are transfering you in paypal..... </h1>
<?php
$paypal_url='http://www.sandbox.paypal.com/';
$pay=$_SESSION["pay"];
$order_id=$_SESSION["order_id"];
?>

<form action="<?php echo $paypal_url;?>/cgi-bin/webscr" method="post" name="buyCredits" id="buyCredits">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="nimeshaseuok-facilitator@gmail.com">
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="item_name" value="payment for Testing">
	<input type="hidden" name="item_number" value="1212">
	<input type="hidden" name="amount" value="<?php echo $pay; ?>">
	<input type="hidden" name="return" value="http://localhost/New%20folder/userside/payment_success.php?id1=<?php echo $order_id; ?>">
</form>
<script type="text/javascript">
	document.getElementById("buyCredits").submit();
</script>