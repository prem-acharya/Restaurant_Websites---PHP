<title>Pay Money</title>
<?php
session_start();
require('config.php');
require('razorpay-php/Razorpay.php');

error_reporting(0);

use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);
$orderData = [
    'receipt'         => 3456,
    'amount'          => $_SESSION['total'] * 100,
    'currency'        => "INR",
   // 'amount'          => $_POST['amount'] * 100,
   // 'currency'        => $_POST['currency'],
    'payment_capture' => 1
];
$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
// $data = [
//     "key"               => $keyId,
//     "amount"            => $amount,
//     "name"              => $_POST['item_name'],
//     "description"       => $_POST['item_description'],
//     "image"             => "",
//     "prefill"           => [
//     "name"              => $_POST['cust_name'],
//     "email"             => $_POST['email'],
//     "contact"           => $_POST['contact'],
//     ],
//     "notes"             => [
//     "address"           => $_POST['address'],
//     "merchant_order_id" => "12312321",
//     ],
//     "theme"             => [
//     "color"             => "#5ad286"
//     ],
//     "order_id"          => $razorpayOrderId,
// ];
$email = $_SESSION['email'];
// $username = $_SESSION['username'];

$data = [
    "key"               => $keyId,
    "amount"            => "",
    "name"              => "FOOD ORDER",
    "description"       => "",
    "image"             => "",
    "prefill"           => [
    "name"              => $_POST['username'],
    "email"             => $_SESSION['email'] ,
    "contact"           => "",
    ],
    "notes"             => [
    "address"           => "HOME",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#5ad286"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


require("checkout/manual.php");
?>
</div>