<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .bg{
    /* css for the background image of the shadow */
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
    /* css for the label color */
    color: white;
  }
  .background{
    /* css for the text field */
    background-color: #49ff46;
    color: white;
    width:70%;
    box-sizing: border-box;
    border: none;
  }
</style>
</head>
<body>
  <div class="container shadow-lg bg-white p-1 mt-3">
    <?php include'nav.php'?>
    <div class="shadow bg p-3 bg-white mx-auto">
    <!-- creating a form -->
      <form action="_home.php">
        <div class="form-group">
          <label for="email" class="text">Email address:</label>
          <input type="email" class="form-control background" placeholder="example@gmail.com" id="email" required>
        </div>
        <div class="form-group">
          <label for="pwd" class="text">Password:</label>
          <input type="password" class="form-control background" placeholder="password" id="pwd" required>
        </div>
        <button type="submit" class="btn btn-dangers">Login</button>
      </form>
    </div>
  </div>
</body>
</html>