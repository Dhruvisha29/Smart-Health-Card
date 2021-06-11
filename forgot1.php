<?php
 $conn = mysqli_connect("localhost", "root", "", "iihealth");
require_once("function.php");

//session_start();
//$_SESSION['email'] = $row['email'];
 //$_SESSION['hc_no'] = $row['hc_no'];

require 'PHPMailer-master/PHPMailerAutoload.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  
  if(isset($_POST['hc_no']) && !empty($_POST['hc_no']))
  { 
    $username = mysqli_real_escape_string($conn,$_POST['hc_no']);
    $query = "select email from signup where hc_no = '".$username."'";
    
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1) {
    
      $arr = array();
    
        $to = $row['email'];
        $arr = $row ;
        
      $otp = mt_rand(000000,999999);
      $query1 = "update signup set otp = ".$otp.", otp_used = 0 where 
      email = '".$to."'";
  
    
      $result1 = mysqli_query($conn,$query1);
      
      if ($result1) {
    
        $message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
        $subject = "Request For OTP";   
        $mailSent = send_mail($to, $message, $subject);
        if ($mailSent) {
          
          session_start();
          $_SESSION['hc_no'] = $to;
          echo "<script>
                document.location='lab_pat_hcno.php';
                </script>";
        } else {
          
        }
        //$array = array('status' => '200' , 'details' => $arr);
      } 
      
    } 
    
  } else {
    echo "Try Again"; die;
  }  
}

?>
<?php include('config.php'); ?>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Sep 2018 08:44:19 GMT -->
</html>
