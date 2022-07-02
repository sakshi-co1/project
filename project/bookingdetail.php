

<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 30px;
text-align: left;
}
th {
background-color:black;
color: white;
}
tr:nth-child(even) {background-color:grey }
</style>
</head>
<body>
<table>
<tr>
<th>ROOM ID</th>
<th>ROOM NO</th>
<th>BLOCK ID</th>
<th>SEATS</th>
<th>DESCRIPTION</th>
<th>AVILABLE</th>

</tr>
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
  echo "<tr><td>" . $row["roomid"]."</td><td>" . $row["roomNo"] . "</td><td>". $row["blockId"] . "</td><td>" . $row["noOfSeat"] . "</td><td>". $row["description"] . "</td><td>"
 . $row["isActive"] .  "</td></tr>";

} echo "</table>";
 } else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>