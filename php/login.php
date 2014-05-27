 <?php 

 // Connects to your Database 

$con=mysqli_connect('localhost','root', '235101Bg');

?>


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


<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form action="succes.php" method="post">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input type="text" name="name"><br>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="Password"><br>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>


</body>
</html>
