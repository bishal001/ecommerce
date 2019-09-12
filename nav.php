<?php include'header.php'?>
<body>
 <!--creating navigation bar-->
  <nav class="navbar navbar-expand-xl navbar-dark sticky-top mb-3">
    
      <!--creating toggler button in nav bar-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#respid">
        <span class="navbar-toggler-icon">
          <h4 class="mx-5" style=" color:white">Menu</h4>
        </span>
      </button>
      <!--defining the navigation items-->
      <div class="collapse navbar-collapse text-center" id="respid">
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
        <div class="d-flex flex-row justify-content-center">
          <input type="text" placeholder="Search">
          <button class="btn btn-dangers ml-2" style="color:white; width: 70px;" type="button">Search</button>
        </div>
        <div class="d-flex flex-row ml-2 justify-content-center">
          <div>
            <a href="cart.php"><i class="fa fa-shopping-cart fa-lg mt-1" style="color:white"></i></a>
          </div>
          <div>
            <a href="empty-cart.php"><i class="fa fa-cart-plus fa-lg ml-2 mt-1" style="color:white"></i></a>
          </div>

          <div>
            <a class="ml-3 mr-3" href="login.php" style="color:white">Login</a>
          </div>
          <div>
            <a href="signup.php" style="color:white">Signup</a>
          </div>
        </div>
      </div>
  </nav>