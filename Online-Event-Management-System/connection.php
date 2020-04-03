<?php
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$conn=new mysqli('localhost','root','','phplearning');
	if($conn->connect_error){
die('connection failed:',$conn->connect_error);
}
else
{
$stmt=$conn->prepare("insert into comment(email,comment)values(?,?)");
$stmt->bind_param("ssssi",$email,$comment);
$stmt->execute();
echo "registration successfully.....";
$stmt->close();
$conn->close();
?>