<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 94%;
color: black;
font-family: monospace;
font-size: 30px;
text-align: center;
border: 1px dashed black;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
th {
background-color:black;
color: white;
}
tr:nth-child(even) {background-color:grey }
</style>
</head>
<body>
<table class="center">
<tr>
<th>USERNAME</th>
<th>PAYED AMOUNT</th>

<th>PAYMENT MODE</th>
<th>TOTAL</th>
<th>PENDING</th>


</tr>
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    session_start();
   $p=  $_SESSION['username'];
$sql = "SELECT * FROM notice where username = '$_SESSION[username]'";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
  echo "<tr><td>" . $row["username"]."</td><td>" . $row["amount"]. "</td><td>" .  $row["pay_mod"] . "</td><td>". $row["total"] . "</td><td>" .  $row["pending"]. 
   "</td></tr>";

} echo "</table>";
 } else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
