<!DOCTYPE html>
<html lang="en">

<head>
  <?php include'nav.php'?>
</head>

<body>
  
<div class="container">
  <div class="row">
    <h4>Register Account</h4>
  </div>
  <div class="row">
    <div class="shadow p-3 bg-white" style="width:40%">
        <form action="_home.php">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="example@gmail.com" id="email" style="width:70%" required>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="password" id="pwd" style="width:70%" required>
          </div>
          <button type="submit" class="btn btn-dangers">Login</button>
        </form>
    </div>
  </div>
</div>
</body>

</html>