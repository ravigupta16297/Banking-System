<?php
$name=$_POST["name"];
$password=$_POST["password"];
$caste=$_POST["caste"];
$address=$_POST["address"];
$income=$_POST["income"];
?>
<html>
<head>
<title></title>
</head>
<body style="background-color:red">
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="insert into account(name,address,caste,income,password)values('$name','$address','$caste','$income','$password')";
$res=mysqli_query($con,$que);
if(1>0)
{?>
<script>
alert("Account successfully created");
</script>
<?php
}
header('location:http://localhost/Bank/index.php');
?>
</body>
</html>