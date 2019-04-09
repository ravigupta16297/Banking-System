<?php
session_start();
$name=$_SESSION['name'];



?>
<?php
if(isset($_POST["addres"]))
{
$address=$_POST["address"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="update account set address='$address' where name='$name'";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/update.php');
}
?>
<?php
if(isset($_POST["cast"]))
{
$caste=$_POST["caste"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="update account set caste='$caste' where name='$name'";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/update.php');
}
?>
<?php
$income=$_POST["income"];
if(isset($_POST["incom"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="update account set income='$income' where name='$name'";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/update.php');
}
?>
<?php
if(isset($_POST["pass"]))
{
$password=$_POST["password"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="update account set password='$password' where name='$name'";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/update.php');
}
?>











