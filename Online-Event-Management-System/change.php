<?php
$conn = new mysqli("localhost","root","","phplearning");
$password=$_POST['password1'];
$newpassword=$_POST['newpsw1'];
$sql = "SELECT * FROM user1 WHERE password='$password'";
$result=mysqli_query($conn,$sql); 
if($result){
$rowcount=mysqli_num_rows($result);
if ($rowcount > 0) {
    $sql="update user1 set password='$newpassword' where password='$password'";
    $result1=mysqli_query($conn,$sql);
    if($result1){echo "updated";}
    else{
echo "not updated";
}
} 
else {
    echo "old password not correct";
}
}
else{
echo "error";
}
$conn->close();
?>