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

    Start Time: <input type="text" name="starttime" value=""><br>

    <input type="submit">



</form>



</body>
</html>

http://LIHUA:8082/booking

user id date time location status max avail and current 