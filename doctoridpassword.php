<?php include 'header.php'; ?>

<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center">Doctors Login</h2>
                    
                    <form class="text-left clearfix mt-50"  method="post" >
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Doctorid" name="doctor_id">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-main" name="login">Sign In</button>
                        
                    </form>
                    <p class="mt-20">New in this site ?<a href="signup.php"> Create New Account</a></p>
                    <p><a href="forget-password.php"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

  <div class="footer-bottom">
    <h5>Copyright 2017. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">ihealth</a></h6>
  </div>
</footer>
    

  </body>
  </html>