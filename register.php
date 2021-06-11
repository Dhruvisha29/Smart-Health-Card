<?php
    include('config2.php');
   if(isset($_POST['submit'])){
    // Escape user inputs for security
    $u_firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $u_lastname = mysqli_real_escape_string($conn, $_POST['lname']);
  
    $gender = mysqli_real_escape_string($conn, $_POST['rbg']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
   $role = mysqli_real_escape_string($conn, $_POST['role']);

    $sql = "INSERT INTO user_detail (u_firstname,u_lastname,gender,password,email,role) VALUES ('$u_firstname', '$u_lastname', '$gender','$password', '$email','1')";
       
    if(mysqli_query($conn, $sql)){
       echo "Records added successfully.";
        header('Location:login.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // close connection
    mysqli_close($conn);}
?>



<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Sep 2018 08:44:19 GMT -->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>BrainZone</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	<meta name="author" content="2code.info">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>
<?php 
	$page="register.php";
	include("header.php"); ?>
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>User Register</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<span class="current">Register</span>
						<span class="crumbs-span">/</span>
						<span class="current">User</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="login">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="page-content">
						<h2>User Register</h2>
						<div class="form-style form-style-3">
							<form method="post" action="?">
							
								<div class="form-inputs clearfix">
								<p class="form-control" ><b>
									First Name</b></p>
									<p class="login-text">
										<input type="text"minlength="2" name="fname" pattern="[A-Za-z]{2,}" required="" >
										<i class="icon-user"></i>
									</p>
									<p class="form-control" ><b>
									Last Name</b></p>
									<p class="login-text">
										<input required="true" type="text"   name="lname"  pattern="[A-Za-z]{2,}">
										<i class="icon-user"></i>
									</p>
								

									 
      
									<p class="form-control" ><b>
									Gender</b></p>
									<p>
										 <input type="radio" value="Male" name="rbg" required=""><b>Male</b></p>
										 <p><input type="radio" value="Female" name="rbg" required=""><b>Female</b>
									</p>
        
         


								
									<p class="form-control" ><b>
									Password</b></p>
									<p class="login-password">
										<input required="true" id="myInput" minlength="6" maxlength="16" type="password"  name="password" >
										<i class="icon-lock"></i>
									</p>
									<p class="form-control" >
									<input type="checkbox" value="Show Password" class="login-password" onclick="myFunction()">Show Password</p>
									<p class="form-control" ><b>
									Email</b></p>
									<p class="login-text">
										<input required="" type="email"  name="email" >
										<i class="icon-user"></i>
									</p>
							
							
								</div>
								<p class="form-submit login-submit">
									<center><button type="submit" value="submit" class="button small color" name="submit" id="submit" >Submit</button></center>
								</p>
							
							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-2"></div>
			</div><!-- End row -->
		</div><!-- End login -->
	</section><!-- End container -->
	<?php include("footer.php"); ?>
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script src="js/tabs.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/tags.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '<?php echo base_url(); ?>/index.php/CRUDController/stateajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ value.city_id +'">'+ value.city_name +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>
<!-- End js -->

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Sep 2018 08:44:19 GMT -->
</html>