<? php
$con=mysqli_connect('localhost','root', '235101Bg',  "my_db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
// escape variables for security
$Username= mysqli_real_escape_string($_POST['Username']);
$Password = mysqli_real_escape_string($_POST['Password']);
$Email = mysqli_real_escape_string($_POST['Email']);


$sql="INSERT INTO Register (Username, Password, Email)
VALUES ($Username, $Password, $Email)";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_query($con,"UPDATE Register SET Username
WHERE ID=1");


mysqli_close($con);
?> 
  
 <html>
<body>

Welcome <?php echo $_POST["Username"]; ?><br>
Your email address is: <?php echo $_POST["Email"]; ?>

</body>
</html>
