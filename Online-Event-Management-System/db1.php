<?php
$connect = mysqli_connect("localhost","root","","phplearning");
$sql="INSERT INTO event(eventname,description,img)VALUES ('$_POST[eventname]', '$_POST[description]','$_POST[img]')";
$result=mysqli_query($connect,$sql); 
if($result){
echo "submitted successfully";
}
else{
echo "error";
} 
?>