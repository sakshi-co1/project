<!DOCTYPE html>
<html>
<head>
<title>alloment notification</title>
<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
th, td {
    font-size: 20px;
    padding-left: 80px;
   padding-right: 70px;
   padding-top: 40px;
  text-align: left;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
th,td.monospace {
  font-family: "Lucida Console", Courier, monospace;
}
h1 {
  text-shadow: 2px 2px 5px red;
  text-align: center;
}
</style>
</head>
<body>


<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{   session_start();
   $p=  $_SESSION['username'];
   //echo"$p";
$sql = "SELECT * FROM `adminwork` WHERE username ='$p'";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
 //echo "<tr><th>.id.</th><td>" . $row["ID"]."</td><td>" . $row["Username"] . "</td><td>". $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>". $row["Email"] . "</td><td>"
 //. $row["number"]. "</td><td>". $row["DateOfBirth"] .  "</td></tr>";
echo "<h1><strong> ROOM ALLOTED!! </strong></h1>". "<table class =center><tr>
<th>ROOM NO. : </th>
<td>" .$row["room_no"] ."</td>
".
"<th>NAME : </th>
<td>". $row["Name"] . "</td>
".
"<tr>
<th>EMAIL : </th>
<td> " .  $row["Email"] ."</td>".
"<th>GENDER : </th>
<td>". $row["Gender"] . "</td>
</tr>".
"<tr>
<th>NUMBER : </th>
<td>". $row["Number"] . "</td>".
"<th>PARENT CONTACT : </th>
<td>". $row["p_no"] . "</td>
</tr>".
"<tr>
<th>AMOUNT : </th>
<td>". $row["fees"] . "</td>".
"<th>COURSE : </th>
<td>". $row["Name"] . "</td>
</tr>".
"<tr>
<th>ADHAAR NO. : </th>
<td>". $row["adhaar_no"] . "</td>".
"<th>ADDRESS : </th>
<td>". $row["address"] . "</td>
</tr>"
;

} 
 } else { echo "NO ROOM ALLOTED YET!"; }
$conn->close();
?>
</table>
</body>
</html>



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

tr:nth-child(even) {background-color:grey }
</style>
</head>
<body>
  
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    
  $p=  $_SESSION['username'];
   //echo"$p";
$sql = "SELECT * FROM `fees` WHERE username ='$p'";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
  ?><h1> FEES DETAILS </h1>
  <table class=center><tr>
  <th>USERNAME</th>
  <th>PAYED AMOUNT</th>
  
  <th>PAYMENT MODE</th>
  <th>TOTAL</th>
  <th>PENDING</th>
  
  
  </tr>

  <?php
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
  echo " <BR><BR><tr><td>" . $row["username"]."</td><td>" . $row["amount"]. "</td><td>" .  $row["pay_mod"] . "</td><td>". $row["total"] . "</td><td>" .  $row["pending"]. 
   "</td></tr>";

} echo "</table>";
 } else { echo "----"; }
$conn->close();
?>
</table>
</body>
</html>


