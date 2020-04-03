<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$id=$_POST['id'];
$sql="select eventtype,date,cardno from bookedevent where id='$id'";
$result=mysqli_query($conn,$sql);
while($row = $result->fetch_assoc()) {
	$date=mysqli_real_escape_string($conn, $row['date']);
	$type=mysqli_real_escape_string($conn, $row['eventtype']);
	$cardno=mysqli_real_escape_string($conn, $row['cardno']);
}
$date1=date("Y-m-d");
if($date1>$date){
	$sql1="select balanceamount from card where cardno='$cardno'";
	$result=mysqli_query($conn,$sql1);
	while($row = $result->fetch_assoc()) {
		$balance=mysqli_real_escape_string($conn, $row['balanceamount']);
	}
	if($type=="silver"){
		$balance=$balance+1500;
		$sql3="delete from bookedevent where id='$id'";
		$result4=mysqli_query($conn,$sql3);
		if($result4){
			echo "<img src='success1.jpg'>";
		}
 		else{
			echo "delete error";
		}
		$sql2="update card set balanceamount='$balance' where cardno='$cardno'";
		$result1=mysqli_query($conn,$sql2);
		if($result1){
			echo "<p style='color:crimson;font-family:fantasy;font-size:30px'> UPDATED</p>";
		}
		else{
			echo "not updated";
		}
	}
	if($type=="gold"){
		$balance=$balance+3500;
		$sql3="delete from bookedevent where id='$id'";
		$result4=mysqli_query($conn,$sql3);
		if($result4){
			echo "delete success";
		}
 		else{
			echo "delete error";
		}
		$sql2="update card set balanceamount='$balance' where cardno='$cardno'";
		$result1=mysqli_query($conn,$sql2);
		if($result1){
			echo "updated";
		}
		else{
			echo "not updated";
		}
	}
	if($type=="diamond"){
		$balance=$balance+6000;
		$sql3="delete from bookedevent where id='$id'";
		$result4=mysqli_query($conn,$sql3);
		if($result4){
			echo "delete success";
		}
 		else{
			echo "delete error";
		}
		$sql2="update card set balanceamount='$balance' where cardno='$cardno'";
		$result1=mysqli_query($conn,$sql2);
		if($result1){
			echo "updated";
		}
		else{
			echo "not updated";
		}
	}
}
else{
echo "out of date";
}
?>