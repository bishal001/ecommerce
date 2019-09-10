<!DOCTYPE html>
<html lang="en">
<head>
<style>
   /* css code for the background image */
   body{
      background-image: url("images/background.jpg");
      background-repeat: no-repeat;
      background-color: #cccccc;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
    }
</style>
</head>
<body>
  <div class="container shadow-lg bg-white p-1">
    <?php include'nav.php'?>
    <div class="row justify-content-center mx-auto">
      <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8 mb-3">
        <a href="register_cust_buyer.php" class="btn btn-dangers" style="width:230px">Register As A Customer</a>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-4 col-sm-8 mb-3">
        <a href="register_cust_buyer.php" class="btn btn-dangers" style="width:230px">Register As A Volume Buyer</a>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-4 col-sm-8">
        <a href="register_supplier_personalDetail.php" class="btn btn-dangers" style="width:230px">Register As A Supplier</a>
      </div>
    </div>
    <hr>
  <?php include'footer_2.php'?>
  </div>
</body>
</html>