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
  vertical-align:center;
}
    </style>
</head>
<section class="signin-page account" style="height:auto;">
  <div class="container" style="margin-left: 230px">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Doctor's Page</h2>
          <form class="text-left clearfix mt-30"  method="POST" action="ll.php">
             
             <div class="form-group">
                  <input type="text" class="form-control" value="<?php echo $_POST['hc1_no'] ?>" name="hc111_no">
             </div>
			
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Patient's Name" name="pname" value=
              
             "<?php
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

           <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Age" name="age" disabled>
            </div>-->

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Blood Group" name="bg" value=
                "<?php
             $conn=mysqli_connect("localhost","root","","iihealth");
              $val= $_POST['hc1_no'];
              $result = mysqli_query($conn,"SELECT blood_grp FROM `signup` WHERE hc_no = '$val'");
              if (!$result) {
              echo 'No patient with this cardno registered: ' . mysqli_error();
              exit;
              }
              $row = mysqli_fetch_row($result);

              echo $row[0]; 
              
              ?>">
            </div>

           <!-- <div class="form-group"> 
                <textarea rows="10" cols="10" placeholder="Past Disease Description" name="precord" disabled class="form-control"></textarea>
            </div>--> 

            

            <div class="form-group">	
                <input type="text" class="form-control" placeholder="Doctor Name" name="dname1">
            </div>

           <!-- <div class="form-group">	
                <input type="text" class="form-control" placeholder="Hospital/Clinic Name" name="hlname" disabled>
            </div>-->

            <div class="form-group">	
                <input type="date" placeholder="Today's date" name="date" required class="form-control">
            </div>

            <div class="form-group">
              <select name="degree" class="form-control" required="">
                <option disabled="true" selected="true">Select City</option>
               <option value="vadodara">Baroda</option>
                <option value="surat">Surat</option>
                <option value="ahmedabad">Vapi</option>
                <option value="bharuch">Bharuch</option>
                <option value="rajkot">Anand</option>
              </select>
            </div>

            <div class="form-group">	
                <textarea rows="10" cols="20" placeholder="Issue Description" style="display:inline-block" required class="form-control" name="iss_des"></textarea>
            </div>
             
           <!-- <div class="form-group">
                <input type="checkbox" name="lab" id="ck1" style="display: inline-block;">Laboratory
            </div>
            
            <div class="form-group">	
                <textarea rows="10" cols="50" placeholder="Lab Test" style="display:inline-block" required class="form-control"></textarea>
	            <button type="button" class="btn" style="display: inline-block;width:45%">Click</button>
            </div>-->

    
            <div class="form-group">
                <button type="submit" class="d" style="display: inline-block;width:45%" name="submit">Submit</button>
            </div>
  
            <div class="form-group">
                <button type="button" class="d" style="display: inline-block;width:45%">Reset</button>
            </div>
    
           
          </form>
                    
        </div>
      </div>
    </div>
  </div>


</body>
</html>
 