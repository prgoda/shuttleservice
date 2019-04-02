<?php
session_start();
?><html lang="en">
<head>
</head>
<body>



<br><br><form action="get.php" method="get">


User ID: <input type="text" name="userid" value="<?php echo $_SESSION['userData']['id'] ?> "><br>

Name: <input type="text" name="name" value="<?php echo $_SESSION['userData']['first_name']. " " . $_SESSION['userData']['last_name'] ?> "><br>

Email: <input type="text" name="email" value="<?php echo $_SESSION['userData']['email'] ?> "><br>

Gender: <input type="text" name="gender" value="<?php echo $_SESSION['userData']['gender'] ?> "><br>

Phone: <input type="text" name="phone" value=""><br>

<input type="submit">



</form>



</body>
</html>