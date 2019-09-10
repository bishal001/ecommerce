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
    font-weight: bold;
  }

  .placeholdColor::placeholder {
    color: white !important;
  }
  
  .background {
    /* css for the text field */
    background-color: #1a8a64 !important;
    color: white !important;
    box-sizing: border-box;
    border: none !important;
  }

  .badge {
    font-size: 20px;
    color: white;
    background-color: #03b100;
    border: none;
  }
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

  <div class="container shadow-lg bg-white p-2">
  <?php include'nav.php'?>
    <div class="row justify-content-center">
      <h4 class="font-weight-bold">Register Account</h4>
    </div>
    <div class="d-flex flex-row justify-content-center">
      <p class="mr-1">Alredy have account</p>
      <a href="login.php" style="color:blue">Login</a>
    </div>
    <div class="row justify-content-center">
      <div class="shadow p-1 bg-white bg" style="width:70%">
        <!-- creatin a register form and setting the action-->
        <form action="_home.php">
          <!-- creating the personial detail section -->
          <span class="badge">Your Personal Details</span>
          <hr>
          <p class="text">Registering As:</p>
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="fname" class="text">First Name:</label>
              <input type="text" class="form-control background placeholdColor" placeholder="First Name" id="fname" required>
            </div>
            <div class="col-xl-6">
              <label for="lname" class="text">Last Name:</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Last Name" id="lname" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="email" class="text">E-mail:</label>
              <input type="email" class="form-control background placeholdColor" placeholder="E-mail" id="email" required>
            </div>
            <div class="col-xl-6">
              <label for="number" class="text">Mobile Number:</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Mobile Number" id="number" required>
            </div>
          </div>
          <!-- creating the password section -->
          <span class="badge">Your Password</span>
          <hr>
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="password" class="text">Password:</label>
              <input type="password" class="form-control background placeholdColor" placeholder="Password" id="password" required>
            </div>
            <div class="col-xl-6">
              <label for="cpsw" class="text">Password Confirm:</label>
              <input type="password" class="form-control background placeholdColor" placeholder="Password Confirm" id="cpsw" required>
            </div>
          </div>
          <!-- creating the newsletter section -->
          <span class="badge">Newsletter</span>
          <hr>
          <div class="row mb-3">
            <div class="col">
              <!-- creating a dorpdown for the newsletter -->
              <select name="newsletter" class="form-control background placeholdColor">
              <option value="select">--Subscribe--</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
            </div>
          </div>
          <button type="submit" class="btn btn-dangers float-right">Continue</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>