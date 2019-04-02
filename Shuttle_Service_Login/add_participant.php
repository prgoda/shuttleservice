<?php
/**
 * Created by PhpStorm.
 * User: parthstuff
 * Date: 2/4/19
 * Time: 2:56 PM
 */




session_start();
$bookingid = $_GET['bookingid'];
$participantid = $_SESSION['userData']['id'];
$organo = 1;

$_SESSION['organo'] = $organo;

$output = [
    "ParticipantID"=>(int)$bookingid,
  "BookingID"=>(int)$participantid

];


$payload = json_encode($output);
echo $payload;
$url = 'http://LIHUA:8082/addParti';

$ch = curl_init($url);

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

header("Location: payment-view.php");
exit();