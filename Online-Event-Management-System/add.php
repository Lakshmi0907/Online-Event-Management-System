<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$sql="select *from bookedevent";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
$sql="select *from events";
$result=mysqli_query($conn,$sql);
$rows1=mysqli_num_rows($result);
$sql="select *from service";
$result=mysqli_query($conn,$sql);
$rows2=mysqli_num_rows($result);
$sql="select *from volunteers";
$result=mysqli_query($conn,$sql);
$rows3=mysqli_num_rows($result);
?>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 400px;
height:300px;
  border-radius: 50%;
text-align:center;
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 350px;
  height: 350px;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}

.container {
  padding: 2px 16px;
}
.button {
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
</style>
</head>
<body  style="background-image:url('back8.jpg');background-repeat:no-repeat;background-size: 100% 70%;">

<h2 style="text-align:center;color:blue;font-family:fantasy;font-size:70px">ADMIN</h2>
<BR>
<BR>
<a href="#" class="button">DASHBOARD&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
<br>
<a href="adding.html" class="button">ADDING&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
<br>
<a href="deleting.html" class="button">DELETION&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
<br>
<a href="updating.html" class="button">UPDATED&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
<br>
<a href="delebook.html" class="button">CANCLE EVENT</a>
<br>
<br><br> 
<div class="cards-list" style="position:absolute;top:200px;left:70px">  
<div class="card 1">
  <div class="card_image"> 
<img src="back4.jpg" /> </div>
 <div class="card_title title-white">
    <a href="booked.php" style="text-decoration:none;color:white">Details</a>
 </div>
</div>

</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="cards-list">  
<div class="card 1">
  <div class="card_image"> <img src="back4.jpg" /> </div>
 <div class="card_title title-white">
    <a href="event1.html" style="text-decoration:none;color:white">Details</a>
 </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="stageartist.jpg" />
    </div>
  <div class="card_title title-white">
    <a href="service.html" style="text-decoration:none;color:white">Details</a>
  </div>
</div>
   <div class="card 2">
  <div class="card_image">
    <img src="coor.png" />
    </div>
  <div class="card_title title-white">
    <a href="event1.html" style="text-decoration:none;color:white">Details</a>
  </div>
</div>
</div>
<p style="position:absolute;top:970px;left:140px;color:cyan;font-size:40px">number: <?php
echo $rows1;
?></p>
<p style="position:absolute;top:970px;left:620px;color:cyan;font-size:40px">number: <?php
echo $rows2;
?></p>
<p style="position:absolute;top:970px;right:160px;color:cyan;font-size:40px">number: <?php
echo $rows3;
?></p>
<p style="position:absolute;top:340px;right:500px;color:crimson;font-size:40px">number: <?php
echo $rows;
?></p>
<p style="position:absolute;top:850px;left:160px;color:deepskyblue;font-size:40px">Events</p>
<p style="position:absolute;top:850px;left:620px;color:red;font-size:40px">Services</p>
<p style="position:absolute;top:850px;right:160px;color:red;font-size:40px">Co-ordinators</p>
<p style="position:absolute;top:250px;right:500px;color:deepskyblue;font-size:40px">Booked Events</p>
</body>
</html>