<!DOCTYPE html>
<html lang="en">

<head>
  <?php include'nav.php'?>
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
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <h4>Register Account</h4>
    </div>
    <div class="row justify-content-center">
      <div class="shadow p-3 bg-white bg" style="width:70%">
        <!-- creatin a register form -->
        <form action="_home.php">
          <span class="badge">Your Personal Details</span>
          <hr>
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
          <button type="submit" class="btn btn-dangers">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>