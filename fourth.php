<?php
session_start();
$name=$_POST["username"];
$pass=$_POST["password"];
?>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$qu="select * from account where name='$name' && password='$pass'";
$res=mysqli_query($con,$qu);
$num=mysqli_num_rows($res);
if($num > 0)
{
$_SESSION['name']=$name;
header('location:http://localhost/Bank/welcome.php');
}
else{?>
<script>alert("INCORRECT USER-NAME OR PASSWORD OR USERNAME ALREAY EXISTS");</script>
<?php
header('location:http://localhost/Bank/index.php');
}
?>