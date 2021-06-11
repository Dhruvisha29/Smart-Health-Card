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
  vertical-align: :center;
}
    </style>
</head>
<section class="signin-page account">
    <div class="container" style="height:600px">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block" style="padding-top: 70px">
                    <h2 class="text-center">Doctors Login</h2>
                    
                    <form class="text-left clearfix mt-50"  method="post" >
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Email Id" name="doctor_id">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        
                        <a href="doc_pat_hcno.php" class="d">Sign In</a>
                    </form>
                    <p class="mt-20">New in this site ?<a href="signup.php"> Create New Account</a></p>
                    <p><a href="forget-password.php"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
  

  </body>
  </html>