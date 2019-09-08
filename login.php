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
      width:40%;
  }
</style>
</head>
<body>
  <div class="container" style="display: flex; justify-content: center; align-items: center;">
    <div class="shadow bg p-3 bg-white">
    <!-- creating a form -->
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
</body>
</html>