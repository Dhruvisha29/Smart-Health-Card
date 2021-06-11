


<?php include 'header.php'; ?>

<!-- Srart Contact Us
        =========================================== -->
    <section class="contact-us section bg-gray" id="contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h4>Drop us a note</h4>
                        <h2>Contact Us.</h2>
                        <span class="border"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Contact Form -->
                <div class="contact-form col-12 col-md-6  mx-auto" >
                    <form method="post" action="contactsubmit.php">
                    
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="Your_Name" id="name">
                        </div>
                        
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="Your_Email" id="email">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="Subject" id="subject">
                        </div>
                        
                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="Message" id="message"></textarea>
                        </div>
                    
                        
                        <input type="submit" name="submit" style="border: none;
    padding: 15px 0;
    width: 100%;
    margin: 0;
    background: #31BB9E;
    color: #fff;
    border-radius: 0;
    cursor: pointer;">
                        
                    </form>
                </div>
                <!-- ./End Contact Form -->
            </div> <!-- end row -->
            
        </div> <!-- end container -->
    </section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer" style="padding-right:430px">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
        
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Follow Us</h3>
          <ul>
              <li>
                  <a href="mailto: ihealthcare3@gmail.com">
                     Email
                  </a>
              </li>
              <li>
                  <a href="#">
                      Twitter
                  </a>
              </li>
              
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    
    <h6>Design and Developed by <a href="">iHealth</a></h6>
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
