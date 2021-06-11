<?php
 $conn = mysqli_connect("localhost", "root", "", "iihealth");
require_once("function.php");
require 'PHPMailer-master/PHPMailerAutoload.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['email']) && !empty($_POST['email']))
	{	
		$username = mysqli_real_escape_string($conn,$_POST['email']);
		$query = "select * from signup where email = '".$username."'";
		
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		if (mysqli_num_rows($result) == 1) {
		
			$arr = array();
		
				$to = $row['email'];
				$arr = $row	;
				
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
								window.location='reset.php';
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
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
								<div class="form-inputs clearfix">
									
									<p class="form-control" ><b>
									Email</b></p>
									<p class="login-text">
										<input type="email"  name="email" required="" >
										<i class="icon-user"></i>


								</div>
								<p class="form-submit login-submit">
										<button class="button small color"  name="submit" >Submit
							<a href="reset.php"></a>
						</button>
								</p>




								
							</form>
							
							
							
							


						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				
			</div><!-- End row -->
		</div><!-- End login -->
	</section><!-- End container -->
	
	<?php include ("footer.php");?>
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

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Sep 2018 08:44:19 GMT -->
</html>
