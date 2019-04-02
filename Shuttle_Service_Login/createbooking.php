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

    Date: <input type="text" name="date" value=""><br>

    Start Time: <input type="text" name="starttime" value=""><br>

    End Time: <input type="text" name="endtime" value=""><br>

    Phone: <input type="text" name="phone" value=""><br>

    <input type="submit">



</form>



</body>
</html>
