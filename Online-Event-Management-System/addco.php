<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$name=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['ph'];
if(strlen($phone)<10){
echo "invalid phone number";
}
else{
echo "valid";
$sql="insert into volunteers(name,email,phone)values('$name','$email','$phone')";
$result=mysqli_query($conn,$sql);
if($result){
echo "updated";
}
else{
echo "not updated";
}
}
?>