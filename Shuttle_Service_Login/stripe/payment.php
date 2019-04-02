<?php

require_once('stripe-php/init.php');

\Stripe\Stripe::setApiKey("sk_test_bITeyQiNTx7D4L9xuyQO0YjI00bZVYMm6S");

$amt = $_POST['amount'];
$currency = $_POST['currency'];
$src = $_POST['source'];
$desc = $_POST['description'];

$charge = \Stripe\Charge::create([
    "amount" => $amt,  // this is in cents
    "currency" => $currency,
    "source" => $src, // obtained with Stripe.js
    "description" => $desc
  ]);

if ($charge["paid"] === TRUE) {
    header("Location: home.php");
}
  
//   echo "Retrieveing paid status: ";
//   echo $charge["paid"];
//   echo "";
  
//   echo "<pre>";
//   echo $charge;
//   echo "</pre>"

?>