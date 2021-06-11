<?php

  include 'config.php';
  include 'header.php';
  $a=$_SESSION['hc_no'];

?>

<html>
    <head>
        <title>ID</title>
        <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>
    </head>
   <style>
   #card{
	   float:left;
	   width:360px;
	   height:230px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("images/id.png");
	   background-repeat: no-repeat;
	   background-size: 360px 230px;
	   -webkit-print-color-adjust: exact;
   }
   #c_left{
	   margin-top:65px;
	   margin-left:10px;
	   float:left;
	   width:80px;
	   height:120px;

	   
   }
   #c_box{
	  width:80px; 
	  height:20px;
	  padding:5px;

   }
  #c_right{
	   
	   margin-left:120px;
	   width:220px;
	   height:200px;

   }
   td{
	   font-size:12px;
   }

   </style>
   <?php

       $i=0;
		$query="SELECT * FROM `signup` WHERE hc = '$a'";
		//$query = "SELECT * FROM signup WHERE email = '$email' and password = '$password'";
		$querys=mysqli_query($conn, $query);
		
		 $row_costumers=mysqli_fetch_array($querys);
			
			

			$hc = $row_costumers['hc_no'];
			$f_name = $row_costumers['f_name'];
			$lname = $row_costumers['l_name'];
			$mob = $row_costumers['phone_no'];
			$dob = $row_costumers['birth_date'];
			$bg=$row_costumers['blood_grp'];
			
				
			
		
		?>
   
   
   
     <body>
	 <div id="card">
	 
	  <div id="c_right">
	  <div style="margin-top:2px;margin-left:117px;color:#fff;font-size:10px;"> <br></div>
	   <div style="margin-left:168px;color:#fff;font-size:10px;"> <br></div>
	  <div style="margin-top:4px;margin-left:90px;color:#fff; font-size: 12.5px;">HC NO: <?php echo $hc; ?> <br></div>
	  <table style="margin-top:23px;font-size:15px;">
	  <tr>	
	  <td style="font-size:15px"><b>Name</b></td><td><b>: <?php echo $f_name." ".$lname; ?></b></td>
	  </tr>
	  <tr>
	  <td style="font-size:15px"><b>Blood Group</b></td><td>: <?php echo $hc; ?></td>
	  </tr>
	  <tr>
	  <td style="font-size:15px"><b>Date Of Birth</b></td><td>: <?php echo $dob; ?></td>
	  </tr>
	  <tr>
	  <td style="font-size:15px"><b>Contact No.</b></td><td>: <?php echo $mob; ?></td>
	  </tr>
	
	  </table>
	  
	  </div>
	  <center>
	   <div style="margin-top:10px;margin-left:5px;color:#fff;font-size:12px;"> Health is Wealth</div>
	 	</center>
	 </div>

	<?php  ?>
	 	 	
	 </body>
   </head>
</html   