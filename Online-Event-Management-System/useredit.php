 ?php
	include_once('db.php');
        
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysql_query("SELECT * FROM apple WHERE email='$email'");
		$row= mysql_fetch_array($res);
	}
 
	if( isset($_POST['newName']) )
	{
		$newName = $_POST['name'];
		$email   = $_POST['email'];
		$password = $_POST['password'];
		$address   = $_POST['address'];
		$sql     = "UPDATE user1 SET name='$newName',email='$email',password='$passowrd','address='$address' WHERE email='$email'";
		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
 
?>
<form action="edit.php" method="POST">
Name: <input type="text" name="name" value="<?php echo $row[1]; ?/>"><br/>
email:<input type="email" name="email" value="<?php echo $row[0]; ?/>">
password:<input type="password" name="password" value="<?php echo $row[0]; ?/>">
address<input type="text" name="address" value="<?php echo $row[0]; ?/>">
<input type="submit" value=" Update "/>
</form>