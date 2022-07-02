<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 80%;
color: black;
font-family: monospace;
font-size: 20px;
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
<th>S.NO </th>
<th>TITLE</th>

<th>DATE</th>
<th>DESCRIPTION</th>

</tr>
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
$sql = "SELECT * FROM notice";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
  echo "<tr><td>" . $row["serial"]."</td><td>" . $row["title"] . "</td><td>". $row["createDate"] . "</td><td>" .  $row["description"]. 
   "</td></tr>";

} echo "</table>";
 } else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>