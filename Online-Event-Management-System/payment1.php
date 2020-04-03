<html>
<head>
<style>
body{
	background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:1500px;
}
.img2{position:absolute;top:255px;left:550px;width=200px;height:200px}
</style>
</head>
<center>
<body background="fdsr.jpg">
<?php
session_start();
$db=mysqli_connect("localhost","root","","phplearning");
$cardno=mysqli_real_escape_string($db, $_POST['cardno']);
$cvv=mysqli_real_escape_string($db, $_POST['cvv']);
$eventname=mysqli_real_escape_string($db, $_POST['eventname']);
$location=mysqli_real_escape_string($db, $_POST['location']);
$eventtype=mysqli_real_escape_string($db, $_POST['eventtype']);
$date=mysqli_real_escape_string($db, $_POST['date']);
$time=mysqli_real_escape_string($db, $_POST['time']);
$query="select * from card where cardno='$cardno' and cvv='$cvv'";
$cost=0;
if($eventtype=="silver")
$cost=5000;
if($eventtype=="gold")
$cost=9000;
if($eventtype=="diamond")
$cost=10000;
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
echo $cost;
if($result)
{
	if($row['balanceamount']>$cost)
	{
		$ba=$row['balanceamount']-$cost;
		$query3="insert into bookedevent(eventname,location,eventtype,date,time)values('$eventname','$location','$eventtype','$date','$time')";
		mysqli_query($db,$query3);
		$query2="update card set balanceamount='$ba' where cardno=$cardno";
		mysqli_query($db,$query2);
		echo "<i style='color:#FF1493;font-size:25px;'>TRANSACTION SUCCESFULLY COMPLETED</i><br><br>";
		echo $cost."<i style='color:purple;font-size:25px;'>/- is your total bill</i>";
	}
	else
	{
		echo "Balance is insufficient";
		echo '<form method="POST" action="pay.php">
			<input type="submit" value="OK" name="OK"/></form>';
	}
}
else
{
		echo "Card details did not match";
		echo '<form method="POST" action="pay.php">
			<input type="submit" value="OK" name="OK"/></form>';
}
?>
</body>
<p><img src="paid.jpg" class="img2"/></p>
</center>
</html>