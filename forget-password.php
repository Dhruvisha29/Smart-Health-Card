<?php include 'header.php';
      include 'config.php';
 ?>

<section class="signin-page account">
    <div class="container" style="height:600px">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block" style="margin-top:120px">
                    <h2 class="text-center">Forget Password</h2>
                    
                    <form class="text-left clearfix mt-50" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" name="Email">
                        </div>
                        <p>
                       <a href="reset.php"><button class="btn btn-main"  name="submit"> Submit
             </a>
            </button>
          </p>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>

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
<?php include 'footer.php'; ?> 
  </body>
  </html>