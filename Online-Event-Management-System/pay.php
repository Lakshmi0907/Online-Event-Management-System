<html>
<head>
<style>
body{
	background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:1000px;
background-image:url('payment1.jpg');
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
.img2{position:absolute;top:255px;left:950px;width=250px;height:250px}
</style>
</head>
<center>
<h1><i style='color:crimson;position:absolute;top:10px;right:100px;'><u>Enter Card Details</u></i></h1>
<body>
<form action="payment.php" method="POST">
<table style="position:absolute;right:0px;top:100px;" border="0" width="500" height="300" >
<tr>
<td><i><b>Enter Card Number:</b></i></td>
<td><input type="text" name="cardno" required></td>
</tr>
<tr>
<td><i><b>Enter CVV:</b></i></td>
<td><input type="text" name="cvv" required></td>
</tr>
<tr>
<td><i><b>Enter event name:</b></i></td>
<td><input type="text" name="eventname" required></td>
</tr>
<tr>
<td><i><b>Enter Location:</b></i></td>
<td>
<input type="text" name="location"></td>
</tr>
<tr>
<td><i><b>Enter event type:</b></i></td>
<td><input type="text" name="eventtype" required></td>
</tr>
<tr>
<td><i><b>Enter Date:</b></i></td>
<td><input type="date" name="date" required></td>
</tr>
<tr>
<td><i><b>Enter Time:</b></i></td>
<td><input type="time" name="time" required></td>
</tr>
<tr>
<tr><td colspan="10" align="center">
<input type="submit" name="submit" value="pay">
</td>
</tr>
</table>

</form>
</body>
</center>
</html>