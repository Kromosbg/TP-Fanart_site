<?php
$con=mysqli_connect('localhost','root', '235101Bg');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  { 
   echo  ("Bro we rock") ; 
  }
 if (isset($_POST['submit'])) { 

 if (!$_POST['Username'] | !$_POST['Password'] | !$_POST['Email'] ) {

 		die('You did not complete all of the required fields');

 	}
  
?>




 
<html>
<head>
<style>
body
{
background-color:#D4EEF7;;
}
</style>
</head>

<body>
<form action="insert.php" method="post">

<br>Username: <input type="text" name="Username"></br>
<br>Password: <input type="password" name="Password"></br>
<br>Email: <input type="text" name="Email"></br>
<input type="submit">
</form>

</body>
</html>


