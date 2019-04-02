<?php
require_once('stripe-php/init.php');

\Stripe\Stripe::setApiKey("sk_test_bITeyQiNTx7D4L9xuyQO0YjI00bZVYMm6S");

$charge = \Stripe\Charge::create([
  "amount" => 400,  // this is in cents
  "currency" => "sgd",
  "source" => "tok_visa", // obtained with Stripe.js
  "description" => "Payment for Shutlle Service"
]);

echo "Retrieveing paid status: ";
echo $charge["paid"];
echo "";

echo "<pre>";
echo $charge;
echo "</pre>"

?>
