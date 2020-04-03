<?php 
    $connection = mysqli_connect("localhost", "root", "","phplearning");  
    $query = "SELECT * FROM user1 where email='$_POST[email1]' and password='$_POST[password1]'"; 
    $result = mysqli_query($connection, $query);      
    if ($result) 
    { 
        $row = mysqli_num_rows($result); 
	if($row>0){
	header("Location: edit.html");
	}else{echo "invalid";
	}   
}
  else{
echo "error";
}
    // Connection close  
    mysqli_close($connection); 
?> 