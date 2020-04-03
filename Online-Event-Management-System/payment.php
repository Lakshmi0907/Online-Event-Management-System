<html>
<head>
<style>
body{
	background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:1500px;
}
.button {
  background-color: maroon;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.img2{position:absolute;top:255px;left:550px;width=200px;height:200px}
</style>
</head>
<center>
<body background="back2.jpg">
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
$cost=2500;
if($eventtype=="diamond")
$cost=7500;
if($eventtype=="gold")
$cost=5000;
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if($result)
{
	if($row['balanceamount']>$cost)
	{
		$ba=$row['balanceamount']-$cost;
		$query3="insert into bookedevent(eventname,location,eventtype,date,time,cardno)values('$eventname','$location','$eventtype','$date','$time','$cardno')";
		mysqli_query($db,$query3);
		$query2="update card set balanceamount='$ba' where cardno=$cardno";
		mysqli_query($db,$query2);
		$query4="select id from bookedevent where cardno='$cardno'";
		$result=mysqli_query($db,$query4);
		$row=mysqli_fetch_array($result);
		$id=$row['id'];
		echo "<p style='color:crimson;font-family:fantasy;font-size:30px'>this is your id please remember this to delete event</p><p style='color:green'>$id</p>";
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
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<a href='index.html' class='button'>Continue Home Page</a>	

</center>
</html>