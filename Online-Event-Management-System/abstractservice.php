<?php
$conn=mysqli_connect("localhost","root","","phplearning");
$sql="select* from services";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
echo "<h1 style='font-family:fantasy;color:crimson;text-align:center;font-size:50px'>Updated Services</h1>";  
    while($row = $result->fetch_assoc()) {
$eventname=mysqli_real_escape_string($conn, $row['servicename']);
$description=mysqli_real_escape_string($conn, $row['description']);
$img1=mysqli_real_escape_string($conn, $row['image']); 
echo "<table style='border-collapsed:collapsed'>";
     echo "<tr>";
     echo "<td><img src='$img1' width='400' height='300' style='border-radius:50%'></td>";
     echo "<td>
</td>
<td>
</td>
<td>
</td><td>
</td><td><p style='color:crimson;font-size:40px'>$eventname</p><p style='font-size:25px'>$description</p></td>";     
     echo "</tr>";
     echo "</table>";
echo "</center>";
    }
}

?>