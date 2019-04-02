<?php
/**
 * Created by PhpStorm.
 * User: parthstuff
 * Date: 1/4/19
 * Time: 9:30 PM
 */
// Replace this serviceURL to yours
$serviceURL = "http://LIHUA:8083/courts";

// Service invocation via GET
$json = file_get_contents($serviceURL);

// parsing the String in JSON format to objects so we can manipulate it by
// looping etc
$data = json_decode($json, TRUE);


// as the data is wrapped in an array with 1 element Book, we have to extract
// the Book, in order to get the list of Books
$courtList= $data['court'];

if(!isset($_SESSION['courterror'])){
    echo $_SESSION['courterror'];
}

?>


<html>
<body>

<h1>Book Listing</h1>
<div class="col-md-6">
    <table class='table table-striped' id='booking-list' border='1'>
        <tr>
            <th></th>
            <th>Location</th>
            <th>Price</th>
            <th>Number</th>

        </tr>
        <?php

        foreach($courtList as $court) {
            echo '
              <tr>
                  <td>'                             . $court['Location']  . '</td>
                  <td>'                             . $court['Price'] . '</td>
                  <td>'                             . $court['Court_No']  . '</td>
              </tr>
            ';

        } // foreach
        ?>
    </table>
    <form action="courtverification.php" method="get">

        Location: <input type="text" name="location" value=""><br>

        Court No: <input type="text" name="courtno" value=""><br>

        Date: <input type="text" name="date" value=""><br>

        Timer: <input type="text" name="time" value=""><br>

        <input type="submit">
    </form>
</div>
</body>
</html>

