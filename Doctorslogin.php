<?php include 'header.php'; ?>
<section class="signin-page account" style="height:auto;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Doctor's Login Page</h2>
          <form class="text-left clearfix mt-30" action="index.html">

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Doctor Id">
            </div>

            <div class="form-group">

             <input type="text" class="form-control"  placeholder="HC NO." maxlength="15" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="hc_no" />
            </div>
            
           <!-- <div class="form-group">
              <input type="text" class="form-control"  placeholder="HC No.">
            </div>-->

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="OTP">
            </div>
            <button type="submit" class="btn btn-main" name="login">Sign In</button>

            
          </form>
                    
        </div>
      </div>
    </div>
  </div>
</body>
  </html>
