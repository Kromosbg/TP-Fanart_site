<?php
$con=mysqli_connect('localhost','root', '235101Bg', 'my_db');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  { 
   echo  ("Bro we rock") ; 
  }

// Create database
$sql="CREATE DATABASE my_db";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo ("Error creating database: ") . mysqli_error($con);
  }

 
$sql="CREATE TABLE Register
(ID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
Username CHAR(31),
Password CHAR(31),
Email CHAR(31)
)";	
	
// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully ";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
	

	
mysql_query($con,"INSERT INTO Register (Username, Password, Email)
VALUES ('Ivon', 'Grigoriev', sentad@abv.bg)")	;




?>




  <form action="insert.php" method="post">
  <html>
<body>

<form action="insert.php" method="post">

<br>Username: <input type="text" name="Username"></br>
<br>Password: <input type="text" name="Password"></br>
<br>Email: <input type="text" name="Email"></br>
<input type="submit">
</form>

</body>
</html>
</form>


