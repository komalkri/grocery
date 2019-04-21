<?PHP
   session_start();
?>
<h1> Please wait we are transfering you in paypal....</h1>
<?PHP
  $paypal_url='https://www.sandbox.paypal.com/';
  $pay =$_SESSION["pay"];
  $order_id=$_SESSION["order_id"];
  ?>
  <form action="<?php echo $paypal_url;?>/cg1-bin/webscr" method="post" name="buyCredits" id="byrCredits">
    <input type="hidden" name="cmd" value="_xclick" />
	<input type="hidden" name="business" value="_xclick" />
	<input type="hidden" name="cmd" value="_xclick" />
	<input type="hidden" name="cmd" value="_xclick" />
	<input type="hidden" name="cmd" value="_xclick" />