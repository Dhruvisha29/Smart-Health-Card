
<?php
	$conn=mysqli_connect("localhost","root","","iihealth");
	if($conn)
	{
		if(isset($_POST['submit']))
		{
			$id=$_POST['hc1111_no'];
			$name=$_POST['pname'];
			$date1=$_POST['date'];
			
			
			$sql="INSERT INTO labrecord (`Id`,`Name`,`Date`) VALUES ('$id','$name','$date1')";
			if(mysqli_query($conn,$sql))
			{
				echo '<script type="text/javascript">alert("Data entered succesfully");</script>';
			}
			else
				header('location: lab.php');
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
                        <a href="lab.php" class="d">BACK</a>
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