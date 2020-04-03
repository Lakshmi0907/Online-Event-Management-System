<?php
$mysqli=mysqli_connect('localhost','root','','userdetails');
if(isset($_POST['submit'])){
 $eml = mysqli_real_escape_string($mysqli,$_POST['email']);
 $pwd = mysqli_real_escape_string($mysqli,$_POST['password']);
 $rpwd=mysqli_real_escape_string($mysqli,$_POST['re-password']);
 if($pwd == $rpwd)
 {
  $sql="UPDATE userdetails SET password='$pwd' WHERE email='$eml'";
   if(mysqli_query($mysqli,$sql))
    echo "update successful";
   else
     echo "update not successful";
}
}
?> 
<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
   height: 200px;
  width: 50%;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}
body{
background-color:#1BA3E7;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>

<h2><i><b><center>Forgot Password?</i></b></center></h2>

<form action="forgotpwd.php" method="post"><?= $_SESSION['message'] ?>
  <div class="imgcontainer">
    <img src="images/logo/logo1.jpg" alt="Avtar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>email</b></label>
    <input type="text" placeholder="Enter email " name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <label for="password"><b>Re-enter Password</b></label>
    <input type="password" placeholder="re-enter Password" name="re-password" required>
        
    <button type="submit" name="submit">Update</button>
  </div>

  </form>

</body>
</html>
