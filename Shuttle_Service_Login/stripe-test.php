<?php
require_once('stripe-php/init.php');

\Stripe\Stripe::setApiKey("sk_test_bITeyQiNTx7D4L9xuyQO0YjI00bZVYMm6S");

$charge = \Stripe\Charge::create([
  "amount" => 4000,  // this is in cents
  "currency" => "sgd",
  "source" => "tok_visa", // obtained with Stripe.js
  "description" => "Charge for jenny.rosen@example.com"
]);

echo "<pre>";
echo $charge;
echo "</pre>"

?>
