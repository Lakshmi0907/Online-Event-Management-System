<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$sql="select* from bookedevent";
$result=mysqli_query($conn,$sql);
$en="Event Name";
$desc="Description";
$et="Event Type";
$date="Date";
$time="time";
if ($result->num_rows > 0) {
    // output data of each row
echo "<h1 style='font-family:fantasy;color:crimson;text-align:center;font-size:50px'>Booked Events</h1>";  
echo "<center>";
echo "<img src='booked.jpg' style='position:absolute;top:100px;left:20px;width:800px;height:700px'>";
echo "<table style='position:absolute;top:100px;right:0px;border-collapse:collapsed;BORDER:5PX SOLID BLACK'>";
echo "<tr style='border-collapse:collapsed'>
<th style='background-color:blue;width:180px;height:50px;border: 1px solid black;color:white;border-collapse: collapse;'>$en</th>
<th style='background-color:blue;width:180px;height:50px;color:white;border: 1px solid black;border-collapse: collapse;'>$desc</th>
<th style='background-color:blue;width:180px;height:50px;color:white;border: 1px solid black;border-collapse: collapse;'>$et</th>    
<th style='background-color:blue;width:20px;height:50px;border: 1px solid black;color:white;border-collapse: collapse;'>$date</th>
<th style='background-color:blue;width:20px;height:50px;border: 1px solid black;color:white;border-collapse: collapse;'>$time</th></tr>";
while($row = $result->fetch_assoc()) {
$eventname=mysqli_real_escape_string($conn, $row['eventname']);
$description=mysqli_real_escape_string($conn, $row['location']);
$img1=mysqli_real_escape_string($conn, $row['eventtype']);
$date1=mysqli_real_escape_string($conn, $row['date']);
$time1=mysqli_real_escape_string($conn, $row['time']); 
     echo "<tr style='border-collapse:collapsed;'>";
     echo "<td style='BACKGROUND-COLOR:Bisque;font-size:25px;text-align:center;width:100px;border-collapse:collapsed;height:50px;border: 1px solid crimson;'>$eventname</td>";
     echo "<td style='BACKGROUND-COLOR:Bisque;font-size:25px;text-align:center;width:100px;border-collapse:collapsed;height:50px;border: 1px solid crimson;'>$description</td>";      
echo "<td style='BACKGROUND-COLOR:Bisque;font-size:25px;text-align:center;width:100px;border-collapse:collapsed;height:50px;border: 1px solid crimson;'>$img1</td>";
     
echo "<td style='BACKGROUND-COLOR:Bisque;font-size:25px;text-align:center;width:100px;border-collapse:collapsed;height:50px;border: 1px solid crimson;'>$date1</td>";      
     echo "<td style='BACKGROUND-COLOR:Bisque;font-size:25px;text-align:center;width:100px;border-collapse:collapsed;height:50px;border: 1px solid crimson;'>$time1</td>";      
          echo "</tr>";
    }
}
 echo "</table>";
echo "</center>";
?>