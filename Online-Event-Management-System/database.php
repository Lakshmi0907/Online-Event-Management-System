<?php
$connect = mysqli_connect("localhost","root","","phplearning");
$sql="INSERT INTO user1(name,email,password,address)VALUES ('$_POST[name]','$_POST[email]', '$_POST[password]','$_POST[address]')"; 
$sql1 = "SELECT * FROM user1 where name='$_POST[name]'";
$result1 = $connect->query($sql1);
$rowcount=mysqli_num_rows($result1);
if ( $rowcount> 0) {
    echo "take another username";
} 
else {
$result=mysqli_query($connect,$sql);
echo "submitted successfully";
} 
?>