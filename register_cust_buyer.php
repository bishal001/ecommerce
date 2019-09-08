<!DOCTYPE html>
<html lang="en">

<head>
  <?php include'nav.php'?>
  <style>
  .bg{
    background-image: url("images/form_background.jpg");
    background-repeat: no-repeat;
      background-color: #cccccc;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      width:700px;
      height:300px;
  }
  .text{
    color: white;
  }
  .background{
    background-color: #49ff46;
    color: white;
    width:70%;
    box-sizing: border-box;
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
        <form action="_home.php">
        <div class="row mb-3">
          <div class="col-xl-6">
            <label for="fname" class="text">First Name:</label>
            <input type="text" class="form-control background" placeholder="First Name" id="fname" 
              required>
          </div>
          <div class="col-xl-6">
            <label for="lname" class="text">Last Name:</label>
            <input type="text" class="form-control background" placeholder="Last Name" id="lname" required>
          </div>
        </div>
          <button type="submit" class="btn btn-dangers">Login</button>
        </form>
    </div>
  </div>
</div>
</body>

</html>