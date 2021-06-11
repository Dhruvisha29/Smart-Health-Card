<?php include 'header.php'; ?>
<section class="signin-page account" style="height:auto;">
  <div class="container" style="height:700px">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Doctor's Page</h2>
          <form class="text-left clearfix mt-30" action="index.html">

			
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Patient's Name" name="pname" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Age" name="age" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Blood Group" name="bg" disabled>
            </div>

            <!--<div class="form-group"> 
                <textarea rows="10" cols="10" placeholder="Past Disease Description" name="precord" disabled class="form-control"></textarea>
            </div> -->

            <h2 class="text-center">Current problem</h2>

            <div class="form-group">	
                <input type="text" class="form-control" placeholder="Doctor Name" name="dname" required>
            </div>

            <div class="form-group">	
                <input type="text" class="form-control" placeholder="Hospital/Clinic Name" name="hlname" required>
            </div>

            <div class="form-group">	
                <input type="date" placeholder="Today's date" name="date" required>
            </div>

            <div class="form-group">
              <select name="degree" class="form-control" required="">
                <option disabled="true" selected="true">Select City</option>
                <option value="vadodara">Baroda/option>
                <option value="surat">Surat</option>
                <option value="ahmedabad">Vapi</option>
                <option value="bharuch">Bharuch</option>
                <option value="rajkot">Anand</option>
                
              </select>
            </div>

            <div class="form-group">	
                <textarea rows="10" cols="20" placeholder="Issue Discription" style="display:inline-block" required class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <input type="checkbox" name="lab" id="ck1" style="display: inline-block;">Laboratory
            </div>
            
            <div class="form-group">	
                <textarea rows="10" cols="50" placeholder="Lab Test" style="display:inline-block" required ></textarea>
	            <<button type="button" class="btn" style="display: inline-block;width:45%">Click</button>
            </div>

    
            <div class="form-group">
                <button type="submit" class="btn" style="display: inline-block;width:45%">Submit</button>
            </div>
  
            <div class="form-group">
                <button type="button" class="btn"style="display: inline-block;width:45%">Reset</button>
            </div>
	
    
    
           
          </form>
                    
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>
  </html>
   