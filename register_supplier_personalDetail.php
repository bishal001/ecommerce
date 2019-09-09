<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  /* css for the background image of the shadow */
  .bg {
    background-image: url("images/form_background.jpg");
    background-repeat: no-repeat;
    background-color: #cccccc;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    width: 800px;
    height: auto;
  }

  .text {
    /* css for the label color */
    color: white;
  }

  .background {
    /* css for the text field */
    background-color: #49ff46;
    color: white;
    width: 70%;
    box-sizing: border-box;
    border: none;
  }

  .badge {
    font-size: 20px;
    color: white;
    background-color: #03b100;
    border: none;
  }

  body {
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
    <!-- heading part -->
    <h4 class="font-weight-bold text-center">Seller Registration</h4>
    <div class="d-flex flex-row justify-content-center">
      <p class="mr-1">Alredy have account</p>
      <a href="login.php" style="color:blue">Login</a>
    </div>
    <!-- icon section -->
    <div class="row justify-content-center">
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 mt-2">
        <div class="row no-gutters mx-5">
          <i class="fa fa-pencil fa-edit fa-3x" style="color: blue"></i>
        </div>
        <div class="row no-gutters text-center">
          <p class=" font-weight-bold" style="color:blue">Personal Detail</p>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4">
        <div class="row no-gutters mx-4">
          <i class="fa fa-user-o fa-user fa-3x ml-3 mr-3 mb-2"></i>
        </div>
        <div class="row no-gutters text-center">
          <p class=" font-weight-bold">Seller Information</p>
        </div>
      </div>

      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 mt-2">
        <div class="row no-gutters mx-4">
          <i class="fa fa-credit-card fa-3x"></i>
        </div>
        <div class="row no-gutters text-center">
          <p class=" font-weight-bold">Payment Detail</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="shadow p-1 bg-white bg" style="width:70%">
        <!-- creatin a register form and setting the action-->
        <form action="register_supplier_sellerInformation.php">
          <!-- creating the personial detail section -->
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="fname" class="text">First Name:</label>
              <input type="text" class="form-control background" placeholder="First Name" id="fname" required>
            </div>
            <div class="col-xl-6">
              <label for="lname" class="text">Last Name:</label>
              <input type="text" class="form-control background" placeholder="Last Name" id="lname" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="email" class="text">E-mail:</label>
              <input type="email" class="form-control background" placeholder="E-mail" id="email" required>
            </div>
            <div class="col-xl-6">
              <label for="number" class="text">Mobile Number:</label>
              <input type="text" class="form-control background" placeholder="Mobile Number" id="number" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="password" class="text">Password:</label>
              <input type="password" class="form-control background" placeholder="Password" id="password" required>
            </div>
            <div class="col-xl-6">
              <label for="cpsw" class="text">Password Confirm:</label>
              <input type="password" class="form-control background" placeholder="Password Confirm" id="cpsw" required>
            </div>
          </div>
          <button type="submit" class="btn btn-dangers float-right">Next</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>