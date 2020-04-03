<html>
<head>
<style>
body{
background-image:url('edit3.jpg');
background-repeat:no-repeat;
background-size:1000px 700px;
}
.btn {
  background-color: maroon;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.a1{
position:absolute;
top:50px;
right:100px;
}
</style>
</head>
</html>
<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$email=$_POST['id'];
$sql="select * from user1 where email='$email'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
if($rows==0){
echo "your old email id is incorrect";
}
else{
while($row = mysqli_fetch_assoc($result))
{
$name=mysqli_real_escape_string($conn, $row['name']);
$email=mysqli_real_escape_string($conn, $row['email']);
$password=mysqli_real_escape_string($conn, $row['password']);
$address=mysqli_real_escape_string($conn, $row['address']);

}
echo "<body>
<div class='a1'>
<h1 style='color:crimson;font-family:fantasy;font-size:50px'>ENTER YOUR DATA</h1>
<form action='edit2.php' method='post'>
<lable style='font-size:30px;color:red'>Old Email&nbsp&nbsp</lable>
<input type='text' style='width:200px;height:25px' name='oldname' value=$email
 required><br><br><br>
<lable style='font-size:30px;color:red'>New Name&nbsp</lable>
<input type='text' style='width:200px;height:25px' name='name' value=$name 
required><br><br><br>
<lable style='font-size:30px;color:red'>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</lable>
<input type='email' style='width:200px;height:25px' name='email1' value=$email  
required>
<br><br><br><lable style='font-size:30px;color:red'>Password&nbsp&nbsp&nbsp&nbsp</lable>
<input type='password' style='width:200px;height:25px' name='password' value=$password 
required>
<br><br><br><lable style='font-size:30px;color:red'>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</lable>
<input type='text' style='width:200px;height:25px' name='address' value=$address 
required><br><br><br><br>
<input type='submit' name='submit' class='btn' value='submit'>
</center>
</form>
</div>
</body>";
}
?>