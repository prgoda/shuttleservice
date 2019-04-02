<?php
/**
 * Created by PhpStorm.
 * User: parthstuff
 * Date: 1/4/19
 * Time: 9:11 PM
 */
session_start();

?>
<html lang="en">
<head>
</head>
<body>



<br><br><form action="booking.php" method="get">


    User ID: <input type="hidden" name="userid" value="<?php echo $_SESSION['userData']['id'] ?> "><br>

    Date: <input type="text" name="date" value="<?php echo $_SESSION['date'] ?> "><br>

    Court: <input type="text" name="court" value="<?php echo $_SESSION['court'] ?> "><br>

    Start Time: <input type="text" name="starttime" value="<?php echo $_SESSION['time'] ?> "><br>

    Location:  <input type="text" name="location" value="<?php echo $_SESSION['location'] ?> "><br>

    Status:  <input type="hidden" name="status" value="Available"><br>

    Max Availablity:  <input type="text" name="maxno" value=""><br>

    Current Availablity:  <input type="text" name="currno" value=""><br>

    <input type="submit">



</form>



</body>
</html>


