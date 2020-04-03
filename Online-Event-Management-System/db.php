<?php
$connect = mysqli_connect("localhost","root","","phplearning");
$sql="INSERT INTO comment(email,comment)VALUES ('$_POST[email]', '$_POST[comment]')";
$result=mysqli_query($connect,$sql); 
if($result){
echo "submitted successfully";
}
else{
echo "error";
} 
?>