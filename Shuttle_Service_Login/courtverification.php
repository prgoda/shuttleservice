<?php
/**
 * Created by PhpStorm.
 * User: parthstuff
 * Date: 2/4/19
 * Time: 1:43 PM
 */
session_start();
$courtno = (int)$_GET['courtno'];
$location = $_GET['location'];
$date = $_GET['date'];
$time = $_GET['time'];



$output = 'http://LIHUA:8083/courts/'.$courtno.'&'.$location.'&'.$date.'&'.$time;

// Service invocation via GET
$json = file_get_contents($serviceURL);

// parsing the String in JSON format to objects so we can manipulate it by
// looping etc
$data = json_decode($json, TRUE);

print_r($data);

if(isset($data['id'])){
    $_SESSION['courterror'] = 'Please choose another court or timing';
    header("Location: selectcourts.php");
    exit();
}else{
    $_SESSION['court'] = $courtno;
    $_SESSION['location'] = $location;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;

    header("Location: createbooking.php");
    exit();

}
?>
http://LIHUA:8083/courts/2&11%20Bedok%20North%20Street%201%2C%20Singapore%20469662&2019-03-29&09%3A00%3A00

