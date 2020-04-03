<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 2px solid #f1f1f1;}

input[type=email], input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing:500px 500px;
}

button {
  background-color: crimson;
  color: white;
  padding: 10px 15px;
  margin: 6px 0;
  border: none;
  cursor: pointer;
  font-size:30px;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}
</style>
</head>
<body>
<center style="width:500;height=500">
<h2 style="font-family:fantasy;font-size:50px;color:blue">Comment form</h2>
<form action="db.php" method="post">
  <div class="imgcontainer">
    <img src="feedback.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
    <input type="email" placeholder="Enter email" name="email" required>
    <br>
    <label for="psw"><b>comment</b></label>
    <input type="text" placeholder="Enter comment" name="comment" required>
        <br>
    <button type="submit">Submit</button>
  </div>
</form>
</center>
</body>
</html>
