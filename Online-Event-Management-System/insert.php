<?php
$connection = mysql_connect("localhost", "root", "phplearning"); // Establishing Connection with Server
$db = mysql_select_db("comment", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ 
$name = $_POST['comment'];
$email = $_POST['email'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(student_comment, student_email) values ('$comment', '$email')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
