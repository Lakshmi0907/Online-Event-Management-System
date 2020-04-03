<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$email=$_POST['oldname'];
$name=$_POST['name'];
$email1=$_POST['email1'];
$password=$_POST['password'];
$address=$_POST['address'];
echo "<br>";
$sql="update user1 set name='$name',email='$email1',password='$password',address='$address' where email='$email'";
$result=mysqli_query($conn,$sql);
if($result){
echo "<img src='updated1.jpg'>";
}
?>