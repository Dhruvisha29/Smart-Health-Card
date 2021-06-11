 
 
 <?php
  
  include 'config.php';
  include 'header.php';
   
   if(isset($_POST['login'])) {
      // username and password sent from form 
 
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $query = "SELECT * FROM `signup` WHERE email = '$email' and password = '$password'";
    
   $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($run);
    $count = mysqli_num_rows($run);
   $_SESSION['role']=$row['role_user'];
      
      
   
    
      if($count == 1 && $_SESSION['role']=='patient') {
     //   echo $row['Username'];
        $_SESSION['login_user'] = $row['email'];
        $_SESSION['hc_no'] = $row['hc_no'];
        //$_SESSION['start'] = time();
         header('location:result.php');
         // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
           // $_SESSION['destroy'] = $_SESSION['start'] + (5 * 1);
           // header('index.php');
       }
      else if($count == 1 && $_SESSION['role']=='doctor') {
     //   echo $row['Username'];
        $_SESSION['login_user'] = $row['email'];
        $_SESSION['hc_no'] = $row['hc_no'];
         header('location:doc_pat_hcno.php');
       }
      else if($count == 1 && $_SESSION['role']=='laboratory') {
     //   echo $row['Username'];
        $_SESSION['login_user'] = $row['email'];
        $_SESSION['hc_no'] = $row['hc_no'];
         header('location:lab_pat_hcno.php');
       }
       
       else {
        
         $error = "Your Login Name or Password is invalid";
      }
   }?>

<section class="signin-page account">
    <div class="container" style="height:600px">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block" style="margin-top:90px">
                    <h2 class="text-center">Sign In to HealthCard</h2>
                    
                    <form class="text-left clearfix mt-50"  method="post" action="loginprocess.php">
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-main" name="login">Sign In</button>
                        
                    </form>
                    <p class="mt-20">New in this site ?<a href="signupdiff.php"> Create New Account</a></p>
                    <p><a href="forget-password.php"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.7 -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        var trace1 = {
  x: [1, 2, 3, 4], 
  y: [10, 15, 13, 17], 
  type: 'scatter'
};
var trace2 = {
  x: [1, 2, 3, 4], 
  y: [16, 5, 11, 9], 
  type: 'scatter'
};
var data = [trace1, trace2];
Plotly.newPlot('myDiv', data);
    </script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>
   <?php include 'footer.php'; ?>
  </body>
  </html>