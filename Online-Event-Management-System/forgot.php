<?php
$conn = new mysqli("localhost","root","","phplearning");
$email=$_POST['email'];
$password=$_POST['password1'];
$sql="SELECT * FROM user1 WHERE email='$email'";
$result=mysqli_query($conn,$sql); 
if($result){
	$rowcount=mysqli_num_rows($result);
	if ($rowcount > 0) {
    		$sql="update user1 set password='$password' where email='$email'";
    		$result1=mysqli_query($conn,$sql);
    if($result1){
	echo "password changedsuccessfully";}
    else{
	echo "not updated";
	}
  } 
else {
    echo "0 results";
}
}
else{
echo "error";
}
$conn->close();
?>