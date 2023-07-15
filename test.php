<?php session_start(); ?>



<?php

 $apiKey = "rzp_test_l6MzPPBPXvfOjW";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<form action="./success.php" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $apiKey; ?>"
        data-amount="<?php echo $_POST['amount'] * 100;?>" data-currency="INR"
        data-id="<?php echo 'OID'.rand(10,100).'END';?>" data-buttontext="Pay with Razorpay" data-name="FOOD ORDER"
        data-description="Online Ceramic Shopping System" data-image="./img/rem.png" data-prefill.name=""
        data-prefill.email="" data-prefill.contact="" data-theme.color="#5ad286"></script>
    <input type="hidden" custom="Hidden Element" name="hidden">
</form>