<!DOCTYPE html>
<html lang="en">

<head>
  <?php include'nav.php'?>
</head>

<body>
  
<div class="container">
  <div class="row justify-content-center">
    <h4>Register Account</h4>
  </div>
  <div class="row justify-content-center">
    <div class="shadow p-3 bg-white" style="width:70%">
        <form action="_home.php">
        <div class="row mb-3">
          <div class="col-xl-6">
            <label for="fname">First Name:</label>
            <input type="text" class="form-control" placeholder="First Name" id="fname" 
              required>
          </div>
          <div class="col-xl-6">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" placeholder="Last Name" id="lname" required>
          </div>
        </div>
          <button type="submit" class="btn btn-dangers">Login</button>
        </form>
    </div>
  </div>
</div>
</body>

</html>