<?php include 'header.php'; ?>
<section class="signin-page account" style="height:auto;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block text-center">
          <h2 class="text-center">Patient Page</h2>
          <form class="text-left clearfix mt-30" action="index.html">

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="HC No.">
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="OTP">
            </div>

            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Patient's Name" name="pname" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Age" name="age" disabled>
            </div>

            <div class="form-group">	
                <textarea rows="10" cols="20" placeholder="Address" style="display:inline-block" disabled></textarea>
	        </div> 

            <div class="form-group">
                <input type="text" class="form-control" placeholder="City" name="city" disabled>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Blood Group" name="bg" disabled>
            </div>

            
            <div class="form-group">	
                <textarea rows="10" cols="20" placeholder="Disease" style="display:inline-block" required ></textarea>
	            <textarea rows="10" cols="20" placeholder="Prescription" style="display:inline-block" required></textarea>
            </div>          

                       
            <div class="form-group">	
                <button type="button" class="btn" style="display: inline-block;width:45%">Click</button>
	            <button type="button" class="btn" style="display: inline-block;width:45%">Click</button>
            </div>

        
    
           <!--
            <div class="form-group">
              <select name="degree" class="form-control" required="">
                <option disabled="true" selected="true">Select Blood Group</option>
                <option value="A+ve">A+ve</option>
                <option value="A-ve">A-ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B-ve">B-ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="AB-ve">AB-ve</option>
                <option value="O+ve">O+ve</option>
                <option value="O-ve">O-ve</option>


              </select>
            </div>
            <div class="form-group">
              <textarea placeholder="Address" class="form-control" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
              <input type="date" class="form-control"  placeholder="Birthdate">
            </div>
            <div class="form-group">
             <input type="text" class="form-control" placeholder="Phone Number" maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Phone" />
            </div>
            <div class="form-group">
             <input type="text" class="form-control" placeholder="Alternate Phone Number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Altphone" />
            </div>
            <button type="submit" class="btn btn-main text-center">Sign In</button>-->
          </form>
                    
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>INFORMATION</h3>
          <ul>
            <li><a href="#">Payment Option</a></li>
            <li><a href="#">Free Schedule</a></li>
            <li><a href="#">Getting Started</a></li>
            <li><a href="#">Bitcoin Calculator</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Our Services</h3>
          <ul>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Follow Us</h3>
          <ul>
              <li>
                  <a href="">
                      Facebook
                  </a>
              </li>
              <li>
                  <a href="">
                      Twitter
                  </a>
              </li>
              <li>
                  <a href="">
                      Linkedin
                  </a>
              </li>
              <li>
                  <a href="">
                      Google PLus
                  </a>
              </li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2017. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.7 -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        var trace1 = {
  x: [1, 2, 3, 4], 
  y: [10, 15, 13, 17], 
  type: 'scatter'
};
var trace2 = {
  x: [1, 2, 3, 4], 
  y: [16, 5, 11, 9], 
  type: 'scatter'
};
var data = [trace1, trace2];
Plotly.newPlot('myDiv', data);
    </script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>