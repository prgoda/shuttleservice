<?php
/**
 * Created by PhpStorm.
 * User: parthstuff
 * Date: 2/4/19
 * Time: 2:17 PM
 */



session_start();
$maxno = (int)$_GET['maxno'];
$currno = (int)$_GET['currno'];

$organo = $maxno - $currno;

$_SESSION['organo'] = $organo;

$output = [
    "OrganiserID" => (int)$_GET['userid'],
    "Date" => $_SESSION['date'],
    "startT" => $_SESSION['time'],
    "CourtID" => $_SESSION['court'],
    "Status" => $_GET['status'],
    "Curr_Availability" => (int)$_GET['currno'],
    "Max_Availability" => (int)$_GET['maxno']

];


$payload = json_encode($output);
echo $payload;
$url = 'http://LIHUA:8082/booking';

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