<?php 
include('./header.php');
?>
<title>phpzag.com : Demo Razorpay Payment Gateway Integration in PHP</title>
<?php include('./container.php');?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <br><br>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="../image/pizza.jpg" alt="">
                    <div class="caption">
                        <h4 class="pull-right">₹ 300</h4>
                        <h4><a href="#">Pizza</a></h4>
                    </div>
                    <form id="checkout-selection" action="pay.php" method="POST">
                        <input type="hidden" name="item_name" value="Pizza">
                        <input type="hidden" name="item_description" value="">
                        <input type="hidden" name="item_number" value="3456">
                        <input type="hidden" name="amount" value="150">
                        <input type="hidden" name="address" value="ABCD Address">
                        <input type="hidden" name="currency" value="INR">
                        <input type="hidden" name="cust_name" value="Prem">
                        <input type="hidden" name="email" value="">
                        <input type="hidden" name="contact" value="">
                        <input type="submit" class="btn btn-primary" value="Buy Now">
                    </form>
                </div><br>
                <div class="">
                    <div class="thumbnail">
                        <img src="../image/Burger.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">₹ 80</h4>
                            <h4><a href="#">Burger</a></h4>
                        </div>
                        <form id="checkout-selection" action="pay.php" method="POST">
                            <input type="hidden" name="item_name" value="Burger">
                            <input type="hidden" name="item_description" value="">
                            <input type="hidden" name="item_number" value="3456">
                            <input type="hidden" name="amount" value="250">
                            <input type="hidden" name="address" value="ABCD Address">
                            <input type="hidden" name="currency" value="INR">
                            <input type="hidden" name="cust_name" value="Prem">
                            <input type="hidden" name="email" value="">
                            <input type="hidden" name="contact" value="">
                            <input type="submit" class="btn btn-primary" value="Buy Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php');?>