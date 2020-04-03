<?php
$sql=mysqli_connect("localhost","root","","phplearning");
$query="select * from event";
$result=mysqli_query($sql,$query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["eventname"]. " - Name: " . $row["description"]. "<br>";
    }
} else {
    echo "no updates";
}
$sql->close();
?>
