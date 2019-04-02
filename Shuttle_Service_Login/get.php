

<?php
session_start();
$userid = (int)$_GET['userid'];
$phone = (int)$_GET['phone'];

$output = [
	"id" => $userid ,
	"Name" => $_GET['name'],
	"Gender" => $_GET['gender'],
	"Email" => $_GET['email'],
	"Mobile" => $phone
];

$payload = json_encode($output);
echo $payload;
$url = 'http://LIHUA:8080/user';

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

header("Location: home.php");
exit();
?>