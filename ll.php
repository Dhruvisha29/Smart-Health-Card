
<?php
	$conn=mysqli_connect("localhost","root","","iihealth");
	if($conn)
	{
		if(isset($_POST['submit']))
		{
			$hcno=$_POST['hc111_no'];
			$issue=$_POST['iss_des'];
			$docname=$_POST['dname1'];
			$ddate=$_POST['date'];
			$ccity=$_POST['degree'];
			
			$sql="INSERT INTO patient (`hc_no`,`issue`,`doctorname`,`date1`,`city1`) VALUES ('$hcno','$issue','$docname','$ddate','$ccity')";
			if(mysqli_query($conn,$sql))
			{
				echo '<script type="text/javascript">alert("Data entered succesfully");</script>';
			}
			else
				header('location: doctorpage.php');
		}
	}
?>