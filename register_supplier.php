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
  <div class="container shadow-lg bg-white mb-2 p-1">
    <?php include'nav.php'?>
    <h4 class="font-weight-bold text-center">Seller Registration</h4>
  </div>
</body>
</html>