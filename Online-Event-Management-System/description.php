<?php

$conn = new mysqli("localhost", "root", "", "phplearning");
$sql1="select * from event";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {

echo "<table>";

while($row = $result1->fetch_assoc()) {

echo "<tr>";
$path=$row["img"];
echo "<td>";
echo "<img src='$path' height='150' width='150' />"; echo "</td>";
echo "<td width='100'></td>";
echo "<td>"; echo "</td>"; echo "<td width='400'> <b>"; echo $row["eventname"];echo "<br></b>"; echo $row["description"];  echo "</td>";
echo "<td width='100'></td>";
echo "<td width='100'>"; echo"</td>";



echo "</tr>";



}
echo "</table>";
}
else{
 echo "No Items";
}
echo "<form action='Booking Form.php'>";
echo "<center><button>Book</button></center>";
echo  "</form>";
$conn->close();


?>

<html>
<head>
<style>
body{
 background-color:pink;
 background-image:url("back.jpg");
}
</style>
</head>
<body>
</body>
</html>