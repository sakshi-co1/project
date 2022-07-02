<!DOCTYPE html>
<html>
<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
<style>
table, th, td {
  border: 1px dashed black;
  border-collapse: collapse;
  box-align: center ;
}
th, td {
    font-size: 20px;
    padding-left: 100px;
   padding-right: 200px;
   padding-top: 10px;
  text-align: left;
}
th,td.monospace {
  font-family: "Lucida Console", Courier, monospace;
}
h1 {
  text-shadow: 2px 2px 5px darkred;
  text-align: center;
  
}

</style>


<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
 
  <a href="BookingRequest.php" class="w3-bar-item w3-button">Create Booking</a>
 <a href="adminanouc.php" class="w3-bar-item w3-button">Create Anoucment</a>
 <a href="fees.php" class="w3-bar-item w3-button">Student fees</a>

  <a href="tableshow.php" class="w3-bar-item w3-button">Registrations</a>
</div>

<!-- Page Content -->
<div class="w3-black">
  <button class="w3-button w3-black w3-xlarge" onclick="w3_open()">[=]</button>
  <div class="w3-container">
    <h1>   ADMIN  </h1>
  </div>
</div>


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
$sql = "SELECT count(`Username`) as noofreg FROM `adminwork` "  ;

$d= "SELECT count(`Username`) as noofred FROM `studentform` " ;
$result = mysqli_query($conn,$d);
$result1 = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
$resultcheck1 = mysqli_num_rows($result1);
}

if ($resultcheck > 0 && $resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) && $row1= mysqli_fetch_assoc($result1) ) 
{
  ?>


<div class="container">
  		<div class="row">
  			<div class="col-lg-3">
		  		<div class="card mt-4 mr-3" style="height: 300px ;width: 17rem;background-color:grey ;"; >
				 
				  <div class="card-body">
          <h2 class="card-title">ROOM ALLOTED :</h2>
         <h1 class="card-subtitle mb-2 text-muted"><?php echo" $row1[noofreg]";?></h1>
        <p class="card-text"></p>
          </div>
				</div>
      </div>


      <div class="col-lg-3">
		  		<div class="card mt-4 mr-3" style="height: 300px ;width: 17rem; background-color:grey ;";   >
				  <div class="card-body">
          <h2 class="card-title"> BEDS :</h2>
         <h1 class="card-subtitle mb-2 text-muted"><br>500</h1>
        <p class="card-text"></p>
      
				  </div>
				</div>
      </div>
      <div class="col-lg-3">
		  		<div class="card mt-4 mr-3" style="height: 300px ;width: 17rem; background-color:grey ;";   >
				  
				  <div class="card-body">
          <h2 class="card-title">BEDS TYPE :</h2> <BR><BR>
         <h1 class="card-subtitle mb-2 text-muted">5</h1>
        <p class="card-text"></p>
        
				  </div>
				</div>
      </div>
      <?php
}
 } else { echo "NO BOOKING YET!!"; }
$conn->close();
?>


<?php


$conn = mysqli_connect("localhost","root","","project");
// Check connection
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{   //session_start();
  // $p=  $_SESSION['username'];
   //echo"$p";
$sql ="SELECT count(`Username`) as noofred FROM `studentform` ";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
}
if ($resultcheck > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result) ) 
{

  ?>

<div class="col-lg-3">
		  		<div class="card mt-4 mr-3" style="height: 300px ;width: 17rem; background-color:grey ;">
				 
				  <div class="card-body">
          <h2 class="card-title">USER REGISTRATION:</h2>
         <h1 class="card-subtitle mb-2 text-muted"><?php echo" $row[noofred]";?></h1>
				  </div>
				</div>
      </div>
    </div>
  </div> 










<?php
 //echo "<table><h1>NUMBERS OF ROOM REGISTRATION : " . "$row[noofreg]"."</h1>";//. $row["Username"] . "</td><td>". $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>". $row["Email"] . "</td><td>"
 //. $row["number"]. "</td><td>". $row["DateOfBirth"] .  "</td></tr>";
//echo "$row[noofreg]";


}
 } else { echo "NO BOOKING YET!!"; }
$conn->close();
?>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

<style>
  .card{
    		-webkit-box-shadow: 0px 2px 5px -1px rgba(122,122,122,1);
			-moz-box-shadow: 0px 2px 5px -1px rgba(122,122,122,1);
			box-shadow: 0px 2px 5px -1px rgba(122,122,122,1);
    	}
      .boxb{
    		border: 1px solid black;
    	}
    	.boxr{
    		border: 1px solid yellow;
    	}
    </style>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    	.boxb{
    		border: 1px solid red;
    	}
    	.boxr{
    		border: 1px solid black ;
      
    	}
    	
    	.card{
    		-webkit-box-shadow: 0px 2px 5px -1px rgba(122,122,122,1);
			-moz-box-shadow: 0px 2px 5px -1px rgba(122,122,122,1);
			box-shadow: 0px 2px 10px -1px rgba(122,122,122,1);
    	}
    </style>
    


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
   
  </body>
</html>




</body>
</html> 