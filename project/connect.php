<?php
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $number=$_POST['number'];
    $DateofBirth=$_POST['DateofBirth'];
    //$Gender=$_POST['Gender'];
    $UserName=$_POST['Username'];
    $Password=$_POST['Password'];
    // Die if connection was not successful
    $conn = mysqli_connect("localhost","root","","project");
    $s = "SELECT * FROM student_reg WHERE UserName = `$UserName`";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo " USERNAME ALREADY TAKEN";
    }else{
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO `student_reg` (`FirstName`, `LastName`, `Email`,`number`,`DateOfBirth`,`Username`, `Password`) VALUES ('$FirstName','$LastName','$Email','$number','$DateofBirth','$UserName','$Password')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          header("location:login.html");
         // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         // <strong>Success!</strong> Your entry has been submitted successfully!
         // revert back to login !!!!
        //  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         //   <span aria-hidden="true">×</span>
         // </button>
        //</div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

       
    }
}
    ?>