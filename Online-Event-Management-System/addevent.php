<html>
<head>
<style>
body{
margin:0;
padding:0;
font-family:sans-serif;
background-image:url('back2.jpg');
}
.box{
width:300px;
padding:40px;
position:absolute;
top:30%;
left:40%;
background:#191919;
transition:translate(-50%,-50%);
text-align:center;
}
.box h1{
color:white;
text-transform:uppercase;
font-weight:500;
}
.box input[type="text"],.box textarea[type="text"],.box input[type="password"]{
border:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid #3498db;
padding:14px 10px;
width:200px;
outline:none;
color:white;
border-radius:24px;
transition:0.25px;
}
.box input[type="text"]:focus,.box input[type="password"]:focus,.box textarea[type="text"]:focus{
width:280px;
border-color:#2ecc71;
}
.box input[type="submit"]{
border:0;
background:none;
display:block;
margin:20px auto;
text-align:center;
border:2px solid #2ecc71;
padding:14px 40px;
outline:none;
color:white;
border-radius:24px;
transition:0.25s;
cursor:pointer;
}
.box input[type="submit"]:hover{
background:#2ecc71;
}
</style>
</head>
<body>
<center>
<form  class="box" action="db1.php" method="post">
<h1 style="font-family:fantasy;font-size:40px;color:crimson">Add Event</h1>
<input type="text" name="eventname" placeholder="enter event name" required>
<textarea name="description" placeholder="description" type="text"></textarea><input type="text" name="img" placeholder="enter image name with extension" required>
<input type="submit" name="submit" value="login">
</form>
</center>
</body>
</html>