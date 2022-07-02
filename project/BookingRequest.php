<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 95%;
color: black;
font-family: monospace;
font-size: 21px;
text-align: left;
}
th {
background-color: black;
color: white;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
tr:nth-child(even) {background-color: grey}
</style>
</head>
<body>
<table class="center">
<tr>
<th>Room code</th>
<th>username</th>
<th>Name</th>
<th>Email</th>
<th>Gender</th>
<th>Number</th>
<th>Parent contact</th>
<th>Address</th>
<th>Adharr No.</th>
<th>Course</th>
<th>Modify</th>


</tr>
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
$sql = "SELECT `Username`, `Name`, `Email`, `Gender`, `Number`, `roomcode`, `pno`, `Address`, `adhaar_no`, `course` FROM studentform";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{
  echo "<tr><td>" .$row["roomcode"]. "</td><td>". $row["Username"]."</td><td>" . $row["Name"] . "</td><td>". $row["Email"] . "</td><td>" . $row["Gender"] . "</td><td>". $row["Number"] . "</td><td>"
 .  $row["pno"]. "</td><td>". $row["Address"]. "</td><td>". $row["adhaar_no"] ."</td><td>". $row["course"].  "</td>  <td>  <button class='delete btn btn-sm btn-primary' Username=d".$row['Username'].">Delete</button>  </td>
 </tr>";

} echo "</table>";
 } else { echo "0 results"; }
$conn->close();

if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
$Username = $_GET['delete'];
$delete = true;
$sql = "DELETE FROM `adminwork` WHERE `Username` = $Username";
$result = mysqli_query($conn, $sql);
}
?>

<script>
deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud/BookingRequest.php?delete=${Username}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</table>
</body>
</html>