<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
$itemNo            = $_REQUEST['item_number'];
$itemTransaction   = $_REQUEST['tx']; // Paypal transaction ID
$itemPrice         = $_REQUEST['amt']; // Paypal received amount
$itemCurrency      = $_REQUEST['cc']; // Paypal received currency type
 
$price =  $_SESSION['tot'];
$currency='INR';
 
if($itemPrice==$price && $itemCurrency==$currency)
{
    echo "Payment Successful";
}
else
{
    echo "Payment Failed";
}
?>
</body>
</html>
