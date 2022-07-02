<?php
   $username = $_POST['username'];
   $pay_mod = $_POST["pay_mod"];
   $amount = $_POST["amount"];
   $pending = $_POST['pending'];
   $total = $_POST['total'];
  // $UserName = $_POST['Username'];
    // Die if connection was not successful
    $conn = mysqli_connect("localhost","root","","project");
   // $sql = "SELECT * FROM student_reg WHERE UserName = `$UserName`";
    //$result = mysqli_query($conn, $sql);
    //$num = mysqli_num_rows($result);
   // if($num == 1){
     //   echo " USERNAME ALREADY TAKEN";
   // }else{
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else
    {


   $sql =  " INSERT INTO `fees` (`username`, `pay_mod`, `amount`, `pending`, `total`) VALUES ('$username', '$pay_mod', '$amount', '$pending','$total');";
      //  $sql = "INSERT INTO `notice` (`serial`, `title`, `description`, `createDate`) VALUES ('$serial','$title','$description','$createDate')";
        $result = mysqli_query($conn, $sql);
          // $resultone =mysqli_fetch_row($result);
         //  if($resultone > 0){
        if($result){
          header("location:fees.php");
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success!</strong> Your entry has been submitted successfully!';
         // revert back to login !!!!
        //  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         //   <span aria-hidden="true">×</span>
         // </button>
        //</div>';
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
           // echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         // <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
         //// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          //  <span aria-hidden="true">×</span>
          //</button>
        //</div>';
        }

       
    }

    ?>
