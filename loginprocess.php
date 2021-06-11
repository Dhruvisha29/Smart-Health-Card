<?php
include 'config.php';
session_start();
  if(isset($_POST['login'])) {
      // username and password sent from form 
 
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $query = "SELECT * FROM `signup` WHERE email = '$email' and password = '$password'";
    
   $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($run);
    $count = mysqli_num_rows($run);
   $_SESSION['login_user']= $_POST['email'] ;
      
      
   
    
      if($count == 1 && $row['role_user']=='patient') {
     //   echo $row['Username'];
        /*$_SESSION['login_user'] = $row['email'];
        $_SESSION['hc_no'] = $row['hc_no'];*/
        //echo "hello";
        //$_SESSION['start'] = time();
         header('location: result.php');
         exit;
         // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
           // $_SESSION['destroy'] = $_SESSION['start'] + (5 * 1);
           // header('index.php');
       }
      else if($count == 1 && $row['role_user']=='doctor') {
     //   echo $row['Username'];
        $_SESSION['login_user'] = $row['email'];
        $_SESSION['hc_no'] = $row['hc_no'];
         header('location:doc_pat_hcno.php');
       }
      else if($count == 1 && $row['role_user']=='laboratory') {
     //   echo $row['Username'];
        $_SESSION['login_user'] = $row['email'];
        $_SESSION['hc_no'] = $row['hc_no'];
         header('location:lab_pat_hcno.php');
       }
       
       else {
        
         $error = "Your Login Name or Password is invalid";
      }
   }?>
 

