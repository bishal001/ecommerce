<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  .bg {
    /* css for the background image of the shadow */
    background-image: url("images/form_background.jpg");
    background-repeat: no-repeat;
    background-color: #cccccc;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    width: 500px;
    height: auto;
  }

  .text {
    /* css for the label color */
    color: white;
  }

  .background {
    /* css for the text field */
    background-color: #49ff46 !important;
    color: white !important;
    box-sizing: border-box;
    border: none !important;
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
  <div class="container shadow-lg bg-white p-1">
    <?php include'nav.php'?>
    <div class="row justify-content-center">
    <div class="shadow bg p-3 bg-white">
      <!-- creating a form -->
      <form action="_home.php">
        <div class="row no-gutters">
          <label for="email" class="text">Email address:</label>
          <input type="email" class="form-control background" placeholder="example@gmail.com" id="email" required>
        </div>
        <div class="row no-gutters">
          <label for="pwd" class="text">Password:</label>
          <input type="password" class="form-control background" placeholder="password" id="pwd" required>
        </div>
        <button type="submit" class="btn btn-dangers mt-3">Login</button>
      </form>
    </div>
    </div>
  </div>
</body>

</html>