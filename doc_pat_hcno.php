<?php include 'header.php'; ?>
<?php include 'config.php';  ?>
 <?php
                        if(isset($_POST['otp']))
                        {
                          $hc=$_POST['hc1_no'];
                          if(1)
                          {

                           $query = "INSERT INTO patient (`hc_no`) VALUES ('$hc')";
                           
                        
                          $result = mysqli_query($conn,$query);
     
                           if($result){
                           $msg = "OTP sent Successfully.";
                            }
                          }
                        }

                        if(isset($_POST['submit']))
                        {
                          $hc1_no=$_POST["hc1_no"];
                        }


 ?>
<head>
    <style>
        .d {
  background-color: #31BB9E;;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  vertical-align:center;
}
    </style>
</head>

<section class="signin-page account">
    <div class="container" style="height:600px">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block" style="margin-top:70px">
                    <h2 class="text-center">health card no</h2>
                    
                    <form class="text-left clearfix mt-50"  method="POST" action="doctorpage.php">

                        <div class="form-group">

                         <input type="text" class="form-control"  placeholder="HC NO." maxlength="15" oninput="this.value = this.value.replace(/[^0-9.^A-Z.^a-z]/g, '').replace(/(\..*)\./g, '$1');" name="hc1_no" required="" />

                        </div>

                        <!--<div>
                        <a href="#" class="d" name="otp">Send OTP</a>
                        </div>-->

                        
                        <div class="form-group">
                        <a href="#" class="d">OTP</a>
                      </div>

                       

                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="OTP" required="">
                        </div>

                       <!-- <div class="form-group">
                        <input type="submit" name="submit" value="Sign In">
                      </div>-->
                      <input type="submit" name="submit" value="SIGN IN" class="d">


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

  </body>
  </html>