<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<?php
if(isset($_POST['submit'])){
    $u_firstname = $_POST['first_name'];
    $u_lastname = $_POST['last_name'];
  
    $aadharno = $_POST['ad_no'];
    $password = $_POST['ps'];
    $cpassword = $_POST['cps'];
    $email = $_POST['em'];
   $address= $_POST['add'];
   $birthdate= $_POST['dat'];
   $city= $_POST['u_city'];
   $phoneno= $_POST['Phone'];
   $altphone= $_POST['altphone'];
   $bloodgrp= $_POST['degree'];
   $role=$_POST['role'];
   $hc_no= "i".substr($aadharno,6)."hea".substr($birthdate,8)."lth";
    $slquery = "SELECT * FROM `signup` WHERE email = '$email'";
    $slsquery = "SELECT * FROM `signup` WHERE aadhar_no = '$aadharno'";
  $selectresult = mysqli_query($conn,$slquery);
  $selectresults = mysqli_query($conn,$slsquery);
    if(mysqli_num_rows($selectresult)>0)
    {
         $msg = 'Email already exists';
    }
    elseif($password != $cpassword){
         $msg = "passwords doesn't match";
    }
    elseif(mysqli_num_rows($selectresults)>0){
         $msg = "Aadhar already register";
    }
    else{
      $query = "INSERT INTO signup (`f_name`,`hc_no`,`role_user`,`l_name`,`aadhar_no`,`email`,`password`,`blood_grp`,`address`,`birth_date`,`city`,`phone_no`,`alt_phone_no`) VALUES ('$u_firstname','$hc_no','$role','$u_lastname','$aadharno','$email','$password','$bloodgrp','$address','$birthdate','$city','$phoneno','$altphone')";
   
    

          $result = mysqli_query($conn,$query);
     
     if($result){
             $msg = "User Created Successfully.";
          }
   }
 }
 ?>
<section class="signin-page account" style="height:auto;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Create Your Account</h2>
<p style="color:red;"><?php if(isset($msg)){ echo $msg;} ?></p>
          <form class="text-left clearfix mt-30" method="POST">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="First Name" name="first_name" required="true">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Last Name" name="last_name"  required="true">
            </div>
            <div class="form-group">

             <input type="text" class="form-control" id="hello" placeholder="Aadhaar Card" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="ad_no" required="true" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  placeholder="Email" name="em" required="true">
            </div>
            <input type="hidden" name="role" value="patient">
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Password" name="ps" required="true">
            </div>
              <div class="form-group">
              <input type="password" class="form-control"  placeholder="Confirm Password" name="cps" required="true">
            </div>
            <div class="form-group">
              <select name="degree" class="form-control" required="true">
                <option disabled="true" selected="true" >Select Blood Group</option>
                <option value="A+ve">A+ve</option>
                <option value="A-ve">A-ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B-ve">B-ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="AB-ve">AB-ve</option>
                <option value="O+ve">O+ve</option>
                <option value="O-ve">O-ve</option>


              </select>
            </div>
             <div class="form-group">
              <select name="u_city" class="form-control" required="true">
                <option disabled="true" selected="true">Select Your City</option>
                <option value="vapi">vapi</option>
                <option value="surat">surat</option>
                <option value="bharuch">bharuch</option>
                <option value="baroda">baroda</option>
                <option value="anand">anand</option>


              </select>
            </div>
            
            
            <div class="form-group">
              <textarea placeholder="Address" class="form-control" style="resize: none;" name="add" required="true"></textarea>
            </div>
            <div class="form-group">
              <input type="date" class="form-control"  placeholder="Birthdate" name="dat" required="true">
            </div>
            <div class="form-group">
             <input type="text" class="form-control" placeholder="Phone Number" maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Phone" required="true"/>
            </div>
            <div class="form-group">
             <input type="text" class="form-control" placeholder="Alternate Phone Number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="altphone" />
            </div>
            <button type="submit" class="btn btn-main text-center" name="submit">Submit</button>
          </form>
          <p class="mt-20">Already hava an account ?<a href="login.php"> Login</a></p>
          
        </div>
      </div>
    </div>
  </div>
</section> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
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
<?php include'footer.php'; ?>
  </body>
  </html>
  
 
