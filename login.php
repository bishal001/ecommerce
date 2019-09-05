<!DOCTYPE html>
<html lang="en">
<head>
<?php include'nav.php'?>
</head>
<body>
  <div class="container" style="display: flex; justify-content: center; align-items: center;">
    <div class="shadow p-3 bg-white" style="width:40%">
      <form action="#">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" placeholder="example@gmail.com" id="email" style="width:50%" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" placeholder="password" id="pwd" style="width:50%" required>
        </div>
        <button type="submit" class="btn btn-dangers">Login</button>
      </form>
    </div>
  </div>
</body>
</html>