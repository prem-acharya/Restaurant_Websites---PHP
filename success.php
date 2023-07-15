<?php
session_start();
// include './connect.php';
require './fpdf/fpdf.php';
// echo $_SESSION['id'];
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// require_once("./email/PHPMailer.php");
// require_once("./email/SMTP.php");
// require_once("./email/Exception.php");

// $mail = new PHPMailer(true);


date_default_timezone_set("Asia/Calcutta");
// if(!isset($_SESSION['fname']))
// {
//     header('location:./login.php');
// }

// $id=$_SESSION['id'];
// $quantity=$_SESSION['quantity'];
// $quantity = $quantity-1;
// $upd = "UPDATE product SET quantity = '$quantity' where id= '$id'";
// $conn->query($upd);

if(isset($_POST['print'])){
    $pdf = new FPDF('p','mm',array(220,270));
    $pdf->AddPage();
    // $pdf->Rect(0,0,100,100,['F']);
    // $pdf->Ln(50);
    $pdf->SetFillColor(101,221,255);
    $pdf->SetFont('Courier','B',16);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetdrawColor(0,0,140);
    $pdf->SetFillColor(12, 240, 290, true);
    // $pdf->Cell(40,10,'ONLINE SHOPPING CENTER');
    $pdf->Cell(64,10,"ONLINE FOOD ORDER");
    // $pdf->Image("./imges/logo.jpg", 95, 6,17,17);
    $pdf->Cell(-20,50," PURCHASE BILL\n");
    $pdf->Cell(18,90,"NAME:");
    $name = $_SESSION['username'];
    $pdf->Cell(-18,90,$name);
    $pdf->Cell(45,115,"FOOD ORDER:");
    $pdf->Cell(-45,115,"PIZZE ,BURGER, SANDWICH");
    // $pdf->Image("./imges/product/5215-P-j-1.jpg", 125,65,60,60);
    $pdf->Cell(48,140,"FOOD PRICE:");
    $total = $_SESSION['total'];
    $pdf->Cell(-47,140,$total);
    $pdf->Cell(17,165,"DATE:");
    $pdf->Cell(-17,165,date("d-m-y"));
    $pdf->Cell(17,190,"TIME:");
    $pdf->Cell(-17,190,date("h:i:sa"));
    $pdf->Cell(58,215,"SHIPPING ADDRESS:");
    $pdf->Cell(-30,215,"ADDRESS");
    $pdf->Output();

    // $pdf->Output('YOUR_BILL.pdf','F');

// $pdf = $_GET["file"] .".pdf";  
// // We will be outputting a PDF
// header('Content-Type: application/pdf');
// // It will be called downloaded.pdf
// header('Content-Disposition: attachment; filename="YOUR_BILL.pdf"');
// $imagpdf = file_put_contents($image, file_get_contents($pdf)); 
// echo $imagepdf;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESSFULL PAYMENT</title>
    <link rel="icon" href="./imges/3.png">
    <link rel="stylesheet" href="./CSS/success.css">
</head>

<body><br><br><br><br><br><br>
    <table>
        <tr class="tr">
            <td>SUCCESSFULL PAYMENT</td>
        </tr>
        <!-- <tr class="tr">
            <td><?php// echo $_SESSION['fname'];?>&nbsp;<?php// echo $_SESSION['lname'];?></td>
        </tr>
        <tr class="tr">
            <td><img src="./imges/success.png" height="100" width="100"></td>
        </tr> -->
        <tr class="tr">
            <td>THANK YOU FOR ORDERING FROM OUR SITE.</td>
        </tr>
        <form method="post" action="./success.php">
            <tr>
                <td><button name="print" value="print" class="glow-on-hover">PRINT YOUR BILL</button></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </form>
        <form method="post" action="./welcome.php">
            <tr>
                <td><button name="submit" value="CONTINUE FOR PURCHASE" class="glow-on-hover">BACK TO HOME</button></td>
            </tr>
    </table>
    </form>
</body>

</html>