
<?php include 'config.php'; ?>
<?php
if(isset($_POST['submit']))
{
$hcno=$_POST['hc111_no'];
$issue=$_POST['iss_des'];
$docname=$_POST['dname1'];
$ddate=$_POST['date'];
$ccity=$_POST['degree'];

if(1)
{
$query = "INSERT INTO patient (`hc_no`,`issue`,`doctorname`,`date1`,`city1`) VALUES ('$hcno','$issue','$docname','$ddate','$ccity')";

echo $query;
exit;
     
          $result = mysqli_query($conn,$query);
     
     if($result)
     {
             $msg = "Data updated succesfully.";
          }
   }
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
                   
                    
                    <form class="text-left clearfix mt-50" >

                        
                          
                           <div class="form-group">
                        <a href="doctorpage.php" class="d">BACK</a>
                      </div>
                         
                        

                        <!--<div>
                        <a href="#" class="d" name="otp">Send OTP</a>
                        </div>-->

                        
                        

                       

                       

                       <!-- <div class="form-group">
                        <input type="submit" name="submit" value="Sign In">
                      </div>-->
                      


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

  </body>
  </html>