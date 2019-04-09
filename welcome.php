<?php
session_start();
$name=$_SESSION['name'];
?>
<html>
<head>
<style>
*{
text-decoration:none;
}
.h1{
width:100%;
height:90px;
background-color:brown;
color:yellow;
}
ul li{
list-style-type:none;
display:inline;
float:left;
}
.account{
width=100%;
height:300px;
background-color:white;
border-style:solid;
}
.account:hover
{

color:brown;
}
.withdraw:hover
{
color:brown;
}
.transfer:hover{
color:brown;
}
.withdraw{
width:100%;
height:190px;
background-color:white;
margin-top:40px;
border-style:solid;
}

.transfer{
border-style:solid;
width:100%;
height:290px;
background-color:white;
margin-top:60px;
}
.foot{
width:100%;
height:80px;
background-color:brown;
margin-top:45px;
}
</style>
</head>
<title>welcome</title>

<header class="h1">
<h1 style="text-align:center;">WELCOME TO RV-BANK <?php echo $name;?></h1>
<ul>
<li><form action="logout.php" method="post"><button type="submit" name="logout" style="margin-top:11px">Logout</button></form></li>
<li style="margin-left:35px"><form action="update.php" method="post"><button type="submit" name="update" style="margin-top:11px">Update-Details</button></form></li>
</ul>
</header>
<body style="background-color:pink">
<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="select * from account where name='$name'";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_assoc($res))
{
?>
<br/>
<p style="margin-left:35px;color:blue">CUSTOMER-DETAILS</p>
<p style="margin-left:35px">YOUR INCOME:-<?php echo $row['income'];?></p>
<p style="margin-left:35px">Address:-<?php echo $row['address'];?></p>
<p style="margin-left:35px">RELIGION:-<?php echo $row['caste'];?></p>
<?php
}
?>
<h1 style="text-align:center">YOUR-ACCOUNT</h1>
<div class="account">
<p style="text-align:center;font-size:25px;color:brown">DEPOSITION-SECTION</p>
<marquee behavior="alternate"><p style="font-size:25px;margin-top:-5px">NOW ADD OR TRANSFER MONEY EASILY!!</p></marquee>

<form action="amount.php" method="post">
<p style="margin-left:520px;font-size:25px">Deposit-Amount<input type="text" name="amount" style="margin-left:8px"></p>
<button type="submit" name="money" style="margin-left:640px">DEPOSIT</button></form>
<form action="welcome.php" method="post"><button type="submit" name="balance" style="margin-left:75px;margin-top:-88px">VIEW-Balance</button></form>
<form action="mini.php"><button type="submit" name="mini" style="margin-left:1020px;margin-top:-101px">mini-statement</button></form>
<?php
if(isset($_POST["balance"]))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$que="select sum(amount) from money where name='$name'";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_assoc($res))
{
?><p style="color:blue;font-size:20px;margin-left:20px;margin-top:-70px;">YOUR BALANCE IS <?php echo $row['sum(amount)'];?>rs</p>
<?php
}
}
$_SESSION['name']=$name;
?>
</div>
<div class="withdraw">
<h1 style="text-align:center;color:brown">WITHDRAWAL-SECTION</h1>
<form action="amount.php" method="post">
<p style="margin-left:480px;font-size:25px">Withdraw-Amount<input type="text" name="draw" style="margin-left:8px"></p>
<button type="submit" name="withdraw" style="margin-left:600px">WITHDRAW</button></form>
</div>

<div class="transfer">
<h1 style="text-align:center;color:brown">TRANSFER-SECTION</h1>
<marquee behavior="alternate"><p style="color:red;font-size:15px">Transfer can be done among the Account-holders having their account in RV-bank!!</p></marquee>
<form action="amount.php" method="post">
<p style="margin-left:494px;font-size:25px">Transfer-Amount<input type="text" name="transfer" style="margin-left:8px"></p>
<p style="margin-left:464px;font-size:25px">Receivers-Account-Name<input type="text" name="receiver" style="margin-left:8px"></p>
<button type="submit" name="trans" style="margin-left:620px">TRANSFER</button></form>

</div>









</body>
<footer class="foot"> 
</foot>
</html>