<?php
session_start();
$name=$_SESSION['name'];
?>

<html>
<head>
<style>
.up{
margin-top:100px;
margin-left:100px;
}
</style>
</head>
<title>Update-Details</title>
<body style="background-color:pink">
<p style="text-align:center">WELCOME <?php echo $name;?></p>

<p style="text-align:center;font-size:30px">UPDATE-DETAILS:-</p>
<div class="up">
<form action="update1.php" method="post"><p style="margin-left:400px;">ADDRESS:-<input type="text" name="address" style="margin-left:24px">
<button type="submit" name="addres">Update-Address</button></P></form>

<form action="update1.php" method="post"><p style="margin-left:390px;">RELIGION:-<input type="text" name="caste" style="margin-left:36px">
<button type="submit" name="cast">Update-caste</button></P></form>

<form action="update1.php" method="post"><p style="margin-left:400px;">INCOME:-<input type="text" name="income" style="margin-left:33px">
<button type="submit" name="incom">Update-income</button></P></form>

<form action="update1.php" method="post"><p style="margin-left:400px;">PASSWORD:-<input type="password" name="password" style="margin-left:14px">
<button type="submit" name="pass">Update-password</button></P></form>
<form action="welcome.php"><button type="submit name="create" style="margin-left:510px">submit</button></form>
</div>
</body>
</html>