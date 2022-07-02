

<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 90%;
color: black;
font-family: monospace;
font-size: 20px;
text-align: left;
}
table.center {
  margin-top: auto;
  margin-left: auto; 
  margin-right: auto;
}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: grey}
</style>
</head>
<body>
<table class="center">
<tr>
<th>ID</th>
<th>Username</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Number</th>
<th>Date 0f birth</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
$sql = "SELECT `ID`, `FirstName`, `LastName`, `Email`,`number`,`DateOfBirth`,`Username` FROM student_reg";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
  echo "<tr><td>" . $row["ID"]."</td><td>" . $row["Username"] . "</td><td>". $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>". $row["Email"] . "</td><td>"
 . $row["number"]. "</td><td>". $row["DateOfBirth"] .  "</td></tr>";

} echo "</table>";
 } else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>