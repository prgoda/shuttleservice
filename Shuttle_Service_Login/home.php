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
$serviceURL = "http://LIHUA:8082/bookings";

// Service invocation via GET
$json = file_get_contents($serviceURL);

// parsing the String in JSON format to objects so we can manipulate it by
// looping etc
$data = json_decode($json, TRUE);

// as the data is wrapped in an array with 1 element Book, we have to extract
// the Book, in order to get the list of Books
$bookingList= $data['Get_booking'];?></h1>

<a href="selectcourts.php">Create Booking</a>


<h2>Current Games</h2>
<div class="col-md-6">
    <table class='table table-striped' id='book-list' border='1'>
        <tr>
            <th>Date</th>
            <th>Start Time</th>
            <th>Court No</th>
            <th>Location</th>
            <th>Status</th>
            <th>Current Availabilityn</th>
            <th>Max Availability</th>
            <th>Join</th>
        </tr>
        <?php

        foreach($bookingList as $book) {
            echo '
              <tr>
                  <td>'                             . $book['Date']  . '</td>
                  <td>'                             . $book['startT'] . '</td>
                  <td>'                             . $book['courtid']  . '</td>
                  <td>'                             . $book['Location']  . '</td>    
                  <td>'                             . $book['Status']  . '</td> 
                  <td>'                             . $book['Curr_Availability']  . '</td>
                  <td>'                             . $book['Max_Availability']  . '</td> 
                  <td><a href="add_participant.php?bookingid=' . $book['id'] . '">Join</a></td>
              </tr>
            ';

        } // foreach
        ?>
    </table>




</body>

</html>
