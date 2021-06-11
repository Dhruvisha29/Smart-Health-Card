
<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<head>
    <style>
    .d {
  background-color: #2c2c2c;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  vertical-align: :center;
}
.block
{
    vertical-align:middle;
}


</style>
<section class="signin-page account" style="height:auto;">
  <div class="container" style="height:600px">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="block" style="padding-top: 80px">
          <h2 class="text-center">Pharmacist's Login Page</h2>

          <form class="text-left clearfix mt-30" action="index.html">

            <div class="form-group">

             <input type="text" class="form-control"  placeholder="HC_NO." maxlength="15" oninput="this.value = this.value.replace(/[^0-9.^a-z.^A-Z]/g, '').replace(/(\..*)\./g, '$1');" name="hc_no" />
            </div>

            <!--<div class="form-group">
              <input type="text" class="form-control"  placeholder="HC No.">
            </div>-->
           <div class="form-group">
          <a href="pharmacistpage.php" class="d">Submit</a>
        </div>
        <div class="form-group">
          <a href="pharmacistlogin.php" class="d">Reset</a>
        </div>
        <div class="form-group">
          <a href="index.php" class="d">Home</a>
        </div>
            
          </form>
                    
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
