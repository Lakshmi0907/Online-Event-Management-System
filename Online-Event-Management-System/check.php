<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select*from admin";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       if($row['username']==$username && $row['password']==$password){
		header('location:add.php');
    	}
        else{echo "<center><img src='admin.jpg'>";
        echo "<h1 style='color:crimson;font-family:fantasy;font-size:40px'>ENTER VALID INFORMATION</h1></center>";
    }
	}
}
 else {
    echo "no updates";
}
?>