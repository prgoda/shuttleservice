<?php
session_start();
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
// require_once 'C:/Users/hengisme/vendor/autoload.php';
require __DIR__ .  '/vendor/autoload.php';
use Twilio\Rest\Client;
$phone =

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "AC94911fe1f143b238c008e763f53134ef";
$token  = "cbf631469a620e8e902066eecfa785cc";
$twilio = new Client($sid, $token);
$number = "+6597428612";

$twilio->messages
    ->create($number, // to
            array("from" => "+14252506791", "body" => "Jun Jie, Lihua, Perlyne, Elson, Parth")
    );
?>