<?php
    $apiKey = "rzp_test_5surx34C1GOgMy";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="paymentSuccess.php" method="POST">
<input type="hidden"  name="full_name" value="<?php echo  $_POST['full_name'];?>" />
<input type="hidden"  name="Uemail" value="<?php echo  $_POST['Uemail'];?>" />
<input type="hidden" name="contact" value="<?php echo  $_POST['contact'];?>" />
<input type="hidden"  name="Uaddress"value="<?php echo  $_POST['Uaddress'];?>" />
<input type="hidden" name="Ucity" value="<?php echo  $_POST['Ucity'];?>" />
<input type="hidden"  name="Ustate" value="<?php echo  $_POST['Ustate'];?>" />
<input type="hidden"  name="Uzip" value="<?php echo  $_POST['Uzip'];?>" />
<input type="hidden" value="<?php echo  $_POST['amount'];?>" name="amount">
<input type="hidden" value="<?php echo $_POST['orderDet'];?>" name="orderDet">
<input type="hidden" value="<?php echo $_POST['delivery'];?>" name="delivery">

<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey;?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="AUD"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Desi Hattie"
    data-description="<?php echo $_POST['orderDet']?>"
    data-image="img/logo.png"
    data-prefill.name="<?php echo $_POST['full_name']?>"
    data-prefill.email="<?php echo $_POST['Uemail']?>"
    data-prefill.contact="<?php echo $_POST['contact']?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>
    .razorpay-payment-button { display: none; }
</style>

<script type="text/javascript">
    $(document).ready(function(){

        $('.razorpay-payment-button').click();
    });

</script>