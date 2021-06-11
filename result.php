
<?php

$con = mysqli_connect("localhost","root","","iihealth");
session_start();
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
	   margin-top:200px;
	   margin-left: 550px;
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
   <?php
   

       //$i=0;
       $conn=mysqli_connect("localhost","root","","iihealth");
       $val= $_SESSION['login_user'] ;

       $result = mysqli_query($conn,"SELECT hc_no,f_name,l_name,phone_no,birth_date,blood_grp FROM `signup` WHERE email= '$val'");
       $row = mysqli_fetch_array($result);

			
			

		
		?>
   
   
   
     <body>
	 <div id="card">
	 
	  <div id="c_right">
	  <div style="margin-top:2px;margin-left:117px;color:#fff;font-size:10px;"> <br></div>
	   <div style="margin-left:168px;color:#fff;font-size:10px;"> <br></div>
	  <div style="margin-top:4px;margin-left:90px;color:#fff; font-size: 12.5px;">HC NO: <?php echo $row[0]; ?> <br></div>
	  <table style="margin-top:23px;font-size:15px;">
	  <tr>	
	  <td style="font-size:15px"><b>Name</b></td><td><b>: <?php echo $row[1]." ".$row[2]; ?></b></td>
	  </tr>
	  <tr>
	  <td style="font-size:15px"><b>Blood Group</b></td><td>: <?php echo $row[5]; ?></td>
	  </tr>
	  <tr>
	  <td style="font-size:15px"><b>Date Of Birth</b></td><td>: <?php echo $row[4]; ?></td>
	  </tr>
	  <tr>
	  <td style="font-size:15px"><b>Contact No.</b></td><td>: <?php echo $row[3]; ?></td>
	  </tr>
	
	  </table>
	  
	  </div>
	  <center>
	   <div style="margin-top:10px;margin-left:5px;color:#fff;font-size:12px;"> Health is Wealth</div>
	 	</center>
	 </div>
	 
	 	<br>
	 	<div class="form-group">
                        <a href="index.php" class="d" style="margin-top: 430px; margin-right:400px">BACK</a>
                      </div>
                         
	 </body>
   </head>
</html   