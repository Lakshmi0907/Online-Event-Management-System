<?php
$connect = mysqli_connect("localhost","root","","phplearning");
$sql="INSERT INTO services(servicename,description,image)VALUES ('$_POST[servicename]', '$_POST[description]','$_POST[img]')";
$result=mysqli_query($connect,$sql); 
if($result){
echo "submitted successfully";
}
else{
echo "error";
} 
?>