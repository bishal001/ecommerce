<html>

<head>
  <!--calling bootstrap 4 files and custom css-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/nav_1.css">
  <!--calling bootstrap files-->
  <script src="jquery/jquery-3.3.1.slim.min.js"></script>
  <script src="jquery/popper.min.js"></script>
  <script src="javascript/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <!--creating navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <!--creating toggler button in nav bar-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#respid">
        <span class="navbar-toggler-icon">
          <h4 class="mx-5" style=" color:white">Menu</h4>
        </span>
      </button>
      <!--defining the navigation items-->
      <div class="collapse navbar-collapse" id="respid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="_home.php" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">Vegetables</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Fruits</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Organic Products</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
        <!--creating the search bar and button-->
        <div class="input-group mb-3 my-auto">
          <form class="form-inline my-auto ml-auto">
            <input type="text" class="form-control ar-sm-2 my-2" placeholder="Search" aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-dangers my-xl-2 ml-2" style="color:white" type="button">Search</button>
            </div>
          </form>
        </div>
        <div>
          <a href="cart.php"><i class="fa fa-shopping-cart fa-lg ml-2 " style="color:white"></i></a>
        </div>
        <div>
          <a href="empty-cart.php"><i class="fa fa-cart-plus fa-lg ml-2" style="color:white"></i></a>
        </div>

				<div>
					<a class="ml-3 mr-3" href="login.php" style="color:white">Login</a>	
				</div>
				<div>
					<a class="" href="#" style="color:white">Signup</a>	
				</div>
      </div>
    </div>
  </nav>

</body>

</html>