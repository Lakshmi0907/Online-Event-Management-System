<?php
$conn = new mysqli("localhost","root","","phplearning");
$username=$_POST['username'];
$password=$_POST['password1'];
$sql="SELECT * FROM admin WHERE username='$username'";
$result=mysqli_query($conn,$sql); 
if($result){
	$rowcount=mysqli_num_rows($result);
	if ($rowcount > 0) {
    		$sql="update admin set password='$password' where username='$username'";
    		$result1=mysqli_query($conn,$sql);
    if($result1){
	echo "<img src='updated.jpg'>";}
    else{
	echo "not updated";
	}
  } 
else {
    echo "invalid username";
}
}
else{
echo "error";
}
$conn->close();
?>