<?php
session_start();
$name=$_SESSION['name'];
?>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');
$qu="select * from money where name='$name'";
$res=mysqli_query($con,$qu);
$num=mysqli_num_rows($res);
if($num>0)
{
?>

<?php
while($row=mysqli_fetch_assoc($res))
{?>
<table style="margin-left:450px">
<tr>
<th>Name</th><th><p style="margin-left:40px">Amount</p></th>
</tr>
<tr>
<td><?php echo $row['name'];?></td><td><p style="margin-left:40px"><?php echo $row['amount']; ?></p></td>
</tr>
</table>
<?php
}
}
?>
<html>
<head>
</head>
<body style="background-color:yellow">
<form action="welcome.php"><button type="submit" name="back" style="margin-left:490px">Back</button></form>
</body>
</html>