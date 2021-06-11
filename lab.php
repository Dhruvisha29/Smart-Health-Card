<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<head>
    <style>
   .d {
  background-color: #31BB9E;;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  vertical-align: :center;
}
.block
{
    vertical-align:middle;
}


</style>
<section class="signin-page account" style="height:auto;">
  <div class="container" style="height:600px">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center" style="margin-top:30px">
          <h2 class="text-center">Laboratory</h2>
          <form class="text-left clearfix mt-30" action="l2.php" method="POST">

           <!-- <div class="form-group">
              <input type="text" class="form-control"  placeholder="HC No.">
            </div>-->

           <!-- <div class="form-group">
              <input type="text" class="form-control"  placeholder="OTP">
            </div>-->
            <div class="form-group">

                            <input type="text" class="form-control" value="<?php echo $_POST['hc_no'] ?>" name="hc1111_no">


                        </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Patient's Name" name="pname" value="<?php
             $conn=mysqli_connect("localhost","root","","iihealth");
              $val= $_POST['hc_no'];
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

            <!--<div class="form-group">
                <input type="text" class="form-control" placeholder="Age" name="age" disabled>
            </div>-->

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Blood Group" name="bg" value=
                "<?php
              $conn=mysqli_connect("localhost","root","","iihealth");
              $val= $_POST['hc_no'];
              $result = mysqli_query($conn,"SELECT blood_grp FROM `signup` WHERE hc_no = '$val'");
              if (!$result) {
              echo 'No patient with this cardno registered: ' . mysqli_error();
              exit;
              }
              $row = mysqli_fetch_row($result);

              echo $row[0]; 
              
              ?>">
            </div>

            <div class="form-group">	
                <input type="date" placeholder="Today's date" name="date" required>
            </div>

            <!--
            <div class="form-group">	
                <input type="text" class="form-control" placeholder="Doctor Name" name="dname" required>
            </div>
            
            <div class="form-group">	
                <input type="text" class="form-control" placeholder="Hospital/Clinic Name" name="hlname" required>
            </div>-->
            <!--
            <div class="form-group">
              <select name="degree" class="form-control" required="">
                <option disabled="true" selected="true">Select City</option>
                <option value="vadodara">Vadodara/option>
                <option value="surat">Surat</option>
                <option value="bharuch">Bharuch</option>
                <option value="anand">Anand</option>
                <option value="vapi">Vapi</option>
              </select>
            </div>-->

           <!-- <div class="form-group">	
                <textarea rows="10" cols="20" placeholder="Lab Test" style="display:inline-block" required ></textarea>
	            <textarea rows="10" cols="20" placeholder="Test Result" style="display:inline-block" required></textarea>
            </div>-->            

            

           <div class="form-group">
            <a href="file.php" class="d" style="display: inline-block;width:45%">Upload Report</a>
          </div>
            
        <div class="form-group">
                <button type="submit" class="btn" style="display: inline-block;width:45%" name="submit">Submit</button>
            </div>
        <div class="form-group">
          <a href="lab.php" class="d" style="display: inline-block;width:45%">Reset</a>
       </div>

          </form>
                    
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php'?>
  </body>
  </html>