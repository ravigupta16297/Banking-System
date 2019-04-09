<?php
session_start();
$name=$_SESSION['name'];

?>
<?php
if(isset($_POST["money"]))
{
$amount=$_POST["amount"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="insert into money(name,amount) values('$name','$amount')";
$res=mysqli_query($con,$que);

header('location:http://localhost/Bank/welcome.php');
}
?>
<?php
if(isset($_POST["withdraw"]))
{
$cash=$_POST["draw"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="insert into money(name,amount) values('$name','$amount'-'$cash')";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/welcome.php');
}
?>
<?php
if(isset($_POST["trans"]))
{
$cash=$_POST["transfer"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="insert into money(name,amount) values('$name','$amount'-'$cash')";
$res=mysqli_query($con,$que);
}
?>

<?php
if(isset($_POST["trans"]))
{
$receiver=$_POST["receiver"];
$cash=$_POST["transfer"];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="insert into money(name,amount) values('$receiver','$amount'+'$cash')";
$res=mysqli_query($con,$que);
header('location:http://localhost/Bank/welcome.php');
}
?>



























