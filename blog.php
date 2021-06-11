<?php include 'header.php'; ?>


<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title text-center">
                    <h4>Our untold story</h4>
                    <h2>Bitcoin Knowledge Base.</h2>
                    <span class="border"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single blog post -->
            <article class="col-12 col-md-6" >
                <div class="post-item">
                    <div class="post-thumb">
                        <img class="img-fluid shadow rounded" src="images/blog/post-1.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="post-title">
                        <h3 class="mt-0"><a href="">Ten things about Business</a></h3>
                    </div>
                    <div class="post-meta">
                        <span>By</span> <a href="" class="">Jonathon Ive</a>
                    </div>
                    <div class="post-content">
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
                    </div>
                    <a class="btn btn-main" href="#">Read more</a>
                </div>
            </article>
            <!-- /single blog post -->
            
            <!-- single blog post -->
                <article class="col-12 col-md-6" >
                    <div class="post-item">
                        <div class="post-thumb">
                            <img class="img-fluid shadow rounded" src="images/blog/post-2.jpg" alt="Generic placeholder image">
                        </div>
                        <div class="post-title">
                            <h3 class="mt-0"><a href="">Something I need to tell you</a></h3>
                        </div>
                        <div class="post-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span>By</span> <a href="" class="">Jonathon Ive</a>        
                                </li>
                                <li class="list-inline-item">
                                    <span>By</span> <span> 15th December 2017</span>        
                                </li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
                        </div>
                        <a class="btn btn-main" href="#">Read more</a>
                    </div>
                </article>
            <!-- end single blog post -->
            
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->
                

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