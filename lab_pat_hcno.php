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
    </style>
</head>

<section class="signin-page account">
    <div class="container" style="height:600px">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block" style="margin-top:70px">
                    <h2 class="text-center">health card no</h2>
                    
                    <form class="text-left clearfix mt-50"  method="post" action="lab.php" >

                        <div class="form-group">

                         <input type="text" class="form-control"  placeholder="HC NO." maxlength="15" oninput="this.value = this.value.replace(/[^0-9.^A-Z.^a-z]/g, '').replace(/(\..*)\./g, '$1');" name="hc_no" />

                        </div>
                          <div class="form-group">
                        <a href="#" class="d">OTP</a>
                      </div>

                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="OTP">
                        </div>

                        <input type="submit" name="submit" value="SIGN IN" class="d">

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

  </body>
  </html>