<?php
$login = false;
$showError = false;
$username = $_POST['username'];
$password =$_POST['password'];

//to prevent my sql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysqlstring
//create user database
$conn = mysqli_connect("localhost","root","","project");
$sql = "SELECT * from student_reg where username = '$username' and password ='$password'";
//$sql = "Select * from users where username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql )
       or die("failed to query database".mysqli_errno($result));

       $num = mysqli_num_rows($result);
       if ($num == 1){
          // while($row=mysqli_fetch_assoc($result)){
              // if (password_verify($password , $row['password'])){ 
                   $login = true;
                   session_start();
                   $_SESSION['loggedin'] = true;
                   $_SESSION['username'] = $username;
                   header("location:student_login.php");
                   $_SESSION['username'] = $username;
               } 
               else{
                  echo $showError = "Invalid Credentials";
               }
           
           
        
     
?>
