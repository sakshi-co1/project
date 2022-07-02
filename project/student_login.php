<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <style>
    .home{
    display: flex;
    background: url("pick1.jpg") no-repeat center;
    height: 100vh;
    
    min-height: 500px;
    background-size: cover;
    
   
}
    h1{
      text-align: center;
    }
    </style>
<?php 

//session_start();
//echo"welcome ". $_SESSION['username'];
?>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="rooomreg.html" class="w3-bar-item w3-button">Room Booking</a>
  <a href="anoucment.php" class="w3-bar-item w3-button">Notice</a>
  <a href="status.php" class="w3-bar-item w3-button">Notification</a>
  <a href="bookingdetail.php" class="w3-bar-item w3-button">Room details</a>
  <a href="index.html" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div class="w3-black">
  <button class="w3-button w3-black w3-xlarge " onclick="w3_open()">☰</button>

  <div class="w3-container ">
 
    
  
    <?php 
session_start();
echo"<h1> welcome ". $_SESSION['username']."</h1>";
?>
 
<?php
$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{   //session_start();
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
echo "<h1><strong> ROOM ".$row["room_no"]." </strong></h1>";

} 
 } else { echo "NO ROOM ALLOTED YET!"; }
$conn->close();
?>

</div>
</div>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</section>    
</body>
</html> 