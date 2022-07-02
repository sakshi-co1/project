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
<style>



    </style>

</head>
<body>

<div class="container" style="text-decoration: solid; ">
  <form action="fees2.php" method="POST">
      <label for="username">USERNAME</label>
      <input type="text" class="form-control" id="serial" placeholder="username" name="username">
      <label for="title">PAYMENT_MODE</label>
      <input type="text" class="form-control" id="title" placeholder="online\offline"name="pay_mod" required>
    
      <label for="description">PAYED</label>
      <input type="number" class="form-control" id="description" placeholder="amount"name="amount">
      <label for="description">TOTAL</label>
      <input type="number" class="form-control" id="description" placeholder="amount"name="total">
    
    
      <label for="createDate">PENDING</label>
      <input type="number" class="form-control" id="createDate"placeholder="amount"name="pending"><BR><BR>
    
    
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
$sql = "SELECT * FROM fees";
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
