<?php
session_start();
if(!isset($_SESSION['access_token'])){
	header("Location: login.php");
	exit();
	//
}

$location = "http://LIHUA:8080/user/".$_SESSION['userData']['id'];


$json = file_get_contents($location);

// parsing the String in JSON format to objects so we can manipulate it by
// looping etc
$data = json_decode($json, TRUE);

if($data['name']==''){
	header("Location: createuser.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<title>
    Shuttle Service Home
</title>

<body>
<h1>
<?php
if(isset($data['name'])){
    echo "Hello ".$data['name'];
}
?></h1>

<a href="selectcourts.php">Create Booking</a>


<h2>Current Games</h2>
<table>
    <tr>
        <th>Location</th>
        <th>Date</th>
        <th>Location</th>
        <th>Action</th>
    </tr>
</table>




</body>

</html>