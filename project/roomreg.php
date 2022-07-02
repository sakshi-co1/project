<?php
    $Username=$_POST['Username'];
    $Name=$_POST['Name'];
    //$LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Gender=$_POST['Gender'];
    $Number=$_POST['Number'];
    $roomcode=$_POST['roomcode'];
   // $Gender=$_POST['Gender'];
    $pno=$_POST['pno'];
    $Address=$_POST['Address'];
    $adhaar_no=$_POST['adhaar_no'];
    $course=$_POST['course'];
    // Die if connection was not successful
    $conn = mysqli_connect("localhost","root","","project");
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO `studentform` (`Username`, `Name`, `Email`, `Gender`, `Number`, `roomcode`, `pno`, `Address`, `adhaar_no`, `course`) VALUES (`$Username`, `$Name`, `$Email`, `$Gender`, `$Number`, `$roomcode`, `$pno`, `$Address`, `$adhaar_no`, `$course`)";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          header("location:login.html");
          echo  '<strong>Success!</strong> Your entry has been submitted successfully!';
         //  <strong>Success!</strong> Your entry has been submitted successfully!
         // revert back to login !!!!
        //  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         //   <span aria-hidden="true">×</span>
         // </button>
        //</div>';
        }
        else{
             echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            //echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          //<strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          //<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //<span aria-hidden="true">×</span>
          //</button>
        //</div>';
        }

       
    }
    ?>