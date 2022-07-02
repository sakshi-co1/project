<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="adminanouc2.php" method="POST">
      <label for="serial">S.NO:</label>
      <input type="number" class="form-control" id="serial" placeholder="serial" name="serial">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="title"name="title" required>
    
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="description"name="description">
    
    
      <label for="createDate">DATE:</label>
      <input type="text" class="form-control" id="createDate"placeholder="createDate"name="createDate"><BR><BR>
    
    
    <button type="submit" class="btn btn-primary">Submit</button><BR><BR>
  </form>
</div>

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





