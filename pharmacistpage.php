<?php include 'header.php'; ?>

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
<section class="signin-page account" style="height:auto;">
  <div class="container" style="height:600px">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Pharmacist Page</h2>
          <form class="text-left clearfix mt-30" action="index.html">


            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Patient's Name" name="pname" value="<?php
             $conn=mysqli_connect("localhost","root","","iihealth");
              $val= $_POST['hc1_no'];
              $result = mysqli_query($conn,"SELECT f_name,l_name FROM `signup` WHERE hc_no = '$val'");
              if (!$result) {
              echo 'No patient with this cardno registered: ' . mysqli_error();
              exit;
              }
              $row = mysqli_fetch_row($result);

              echo $row[0]; 
              echo " $row[1]";// 42
// the email value
              ?>">
            </div>

            <div class="form-group">	
                <input type="date" placeholder="Today's date" name="date" class="form-control" required>
            </div>

            <div class="form-group">  
                <input type="text"  name="issue" class="form-control" value="<?php
             $conn=mysqli_connect("localhost","root","","iihealth");
              $val= $_POST['hc1_no'];
              $result = mysqli_query($conn,"SELECT issue FROM `patient` WHERE hc_no = '$val'");
              if (!$result) {
              echo 'No patient with this cardno registered: ' . mysqli_error();
              exit;
              }
              $row = mysqli_fetch_row($result);

              echo $row[0];
              // 42
// the email value
              ?>">
            </div>

            
           <div class="form-group">
                        <a href="pharmacistsignup.php" class="d" name="otp">BACK</a>
                        </div>
             
            
  
           
          </form>
                    
        </div>
      </div>
    </div>
  </div>
</section>

  <?php include 'footer.php'; ?>


    
  </body>
</html>