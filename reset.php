<?php /*require_once('../config/connection.php');*/
//session_start();
	$conn= mysqli_connect('localhost','root','','iihealth');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	$id=$_SESSION['hc_no'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];

	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update signup set otp_used = 1, 
	password = '".$nPass."' where email='".$id."' and 
	otp = '".$otp."' ";
	
	$result = mysqli_query($conn, $query);
	
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset!');
						window.location='login.php';
					</script>";
	
	
	}
else{ echo "<script>
						alert('Something wrong');
						window.location='login.php';
					</script>";}	
}
?>

<!DOCTYPE html>
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
	$page="login.php";
	include("header.php"); ?>
	
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Forgot Password</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
					
						<span class="current">Login</span>
						<span class="crumbs-span">/</span>
					
						<span class="current">Forgot Password</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="login">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Forgot Password</h2>
						<div class="form-style form-style-3">
							<form method="post">
								<div class="form-inputs clearfix">
								
									<p class="form-control" ><b>
									Enter OTP</b></p>
									<p class="login-text">
										<input type="text" minlength="0" maxlength="6" name="otp" required="" >
										<i class="icon-user"></i>
										
										<p class="form-control" ><b>
									Enter New Password</b></p>
									<p class="login-text">
										<input type="password" minlength="6" maxlength="16" id="myInput" name="newpassword" required="" >
										<i class="icon-lock"></i>
										<p class="form-control" >
									<input type="checkbox" value="Show Password" class="login-password" onclick="myFunction()">Show Password</p>

									<p class="form-control" ><b>
									Confirm New Password</b></p>
									<p class="login-text">
										<input type="password" minlength="6" maxlength="16" id="myInput2" name="cpassword" required="" >
										<i class="icon-lock"></i>
										<p class="form-control" >
									<input type="checkbox" value="Show Password" class="login-password" onclick="myFunction2()">Show Password</p>



								<p class="form-submit login-submit">
								
					<p class="form-submit login-submit">
									<button class="button small color" >
							Submit<a href="login.php"></a>
						</button>
						
								</p>


								



								
							</form>
							
							
							
							


						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				
			</div><!-- End row -->
		</div><!-- End login -->
	</section><!-- End container -->
	
	
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
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
function myFunction2() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

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
<!-- End js -->
<?php include 'footer.php'; ?>
</body>

</html>
