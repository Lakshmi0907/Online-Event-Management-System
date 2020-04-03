<?php
$db=mysqli_connect("localhost", "root","","phplearning"); // Establishing Connection with Server
if(isset($_POST['submit'])){ 
$email =mysqli_real_escape_string($db,$_POST['email']);
$comment=  mysqli_real_escape_string($db,$_POST['comment']);
if($name !=''||$email !=''){
//Insert Query of SQL
$query = "insert into comment(email,comment) values ('$email', '$comment')";
mysqli_query($db, $query);
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
 // Closing Connection with Server
?>
