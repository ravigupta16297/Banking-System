<?php
session_start();

?>

<html>
<head>
<style>
.h1
{
width:100%;
height:90px;
background-color:pink;
font-size:30px;

}
</style>
<header class="h1">
<h1>DELETE YOUR ACCOUNT</h1>
</header>
</head>
<title>Delete</title>
<body style="background-color:brown">
<form action="delete.php" method="post">
<p style="margin-top:20px;">User-Name<input type="text" name="user" style="margin-left:20px;"></p>
<p>Password<input type="password" name="pass" style="margin-left:35px;"></p> 
<button type="submit" name="deleter">Delete</button>
</form>
<?php
if(isset($_POST["deleter"]))
{
$name=$_POST["user"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="delete from account where name='$name'";
$res=mysqli_query($con,$que);
}
if(isset($_POST["deleter"]))
{
$name=$_POST["user"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="delete from money where name='$name'";
$res=mysqli_query($con,$que);
}
if(isset($_POST["deleter"]))
{
$name=$_POST["user"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="delete from account where name='$name'";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/index.php');
}

?>
</body>
</html>