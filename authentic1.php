<html>
<?php
session_start();

?>
<head>
<style>
.h1{
width:100%;
height:80px;
background-color:white;
}
.users{
margin-left:260px;
width:700px;
height:300px;
background-color:white;
}

.total{
margin-top:40px;
margin-left:260px;
width:700px;
height:60px;
background-color:white;
}
</style>
</head>
<title>Authentic</title>
<header class="h1">
<h1 style="text-align:center">INFO-PAGE</h1>
<form action="logout.php" method="post">
<button type="submit" name="submit">Logout</button>
</form>
</header>
<body style="background-color:pink">
<div class="users">
<h1 style="text-align:center">USERS-LIST</h1>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="select * from account";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_assoc($res))
 {
?> <p style="text-align:center;margin-left:10px"><?php echo $row["name"]; echo " -------  "; echo $row["address"];  echo " -------  "; echo $row["caste"];?><br/></p>
<?php 
}
?>
</div>
<div class="total">
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="select sum(amount) from money";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_assoc($res))
{
?> <p style="text-align:center;margin-left:10px;padding:17px 0px"> TOTAL BALANCE IN RV-BANK :  <?php echo $row["sum(amount)"]; ?></P>
<?php
}
?>
</div>





















</body>
</html>