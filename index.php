<html>
<head>
<style>
.h1
{
width:100%;
height:90px;
background-color:brown;
color:yellow;
margin-top:-30px;
font-size:25px;
}
.h1:hover
{
background-color:brown;
color:yellow;
}
.details{
background-color:brown;
width:350px;
height:340px;
border-radius:20px;
margin-top:50px;
color:yellow;
margin-left:70px;

}
.details:hover 
{

color:yellow;
font-weight:20px;
}
.authentic{
border-radius:10px;
color:yellow;
margin-left:900px;
margin-top:-300px;
width:340px;
height:250px;
background-color:brown;
}
.foot{
width:100%;
height:100px;
background-color:white;
margin-top:182px;
}
ul li{
display:inline;
float:left;
}
</style>
</head>
<title>Bank</title>
<body style="background-color:pink">
<header class="h1">
<h1 style="text-align:center;font-size:45px;">WELCOME TO RV-BANK</h1>
<ul>
<li><form action="second.php" method="post"><button type"submit" name="submit" style="margin-top:-12px">CREATE-ACCOUNT</button></form></li>
<li><form action="delete.php"><button type"submit" name="del" style="margin-top:-12px;margin-left:80px;">DELETE-ACCOUNT</button></form>
</ul>
</header>
<marquee behavior="alternate"><p style="font-size:32px;color:blue;margin-top:-7px">NOW BANK WITHOUT AN ACCOUNT NUMBER!!</p></marquee>
<marquee scrollamount="2" direction="down";style="margin-top:-29px"><p style="font-size:22px;color:red;text-align:center">DO NOT SHARE YOUR PASSWORD WITH ANYONE!!</p></marquee>
<div class="details">
<form action="fourth.php" method="post">
<p style="text-align:center;font-size:30px;">Customers-Login</p>
<p style="text-align:center;font-size:30px;">Enter The Details To Login</p>
<p style="margin-left:10px">USER-NAME-
<input type="text" name="username"></p>
<p style="margin-left:10px">PASSWORD-
<input type="password" name="password" style="margin-left:9px"></p>
<button type="submit" name="login" style="margin-left:150px;">Login</button>
</form>
</div>
<div class="authentic">
<form action="authentic.php" method="post">
<p style="font-size:20px;margin-left:45px;margin-top:25px">Authenticated-Users Only</p>
<p style="margin-left:18px;margin-top:40px">USER-NAME-<input type="text" name="username"></p>
<p style="margin-left:18px;margin-top:40px">PASSWORD-<input type="password" name="password" style="margin-left:9px"></p>
<button type="submit" name="login" style="margin-left:150px;">Login</button>
</form>
</div>
<footer class="foot">
<p style="text-align:center;color:red;">Follow-on<br/><a href="https://www.facebook.com/profile.php?id=100002566864496"><img src="fb.jpg"></a></p>
<p style="text-align:center;font-size:22px;color:blue">All Rights Reserved</p>
</footer>
</body>
</html>