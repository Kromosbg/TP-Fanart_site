
  
<html>
<body>
<head>
<style>
body
{
background-color:#D4EEF7;;
}
</style>
</head>
<? php
$con=mysqli_connect('localhost','root', '235101Bg',  "my_db");


$sql="INSERT INTO User(Username, Password, Email)
VALUES ('$Username', '$Password', '$Email')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

header("Location: http://www.example.com/"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?> 

Welcome <?php echo $_POST["Username"]; ?><br>
Your email address is: <?php echo $_POST["Email"]; ?>

</body>
</html>
