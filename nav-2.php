<?php include'header.php'?>
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  background-color: #0db04b;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  text-decoration: none;
  font-size: 18px;
  display: block;
  transition: 0.3s;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }


}
</style>
<!-- creating the side nav menu -->

<body style="color:#0db04b">
  <div class="d-block d-lg-none sticky-top">
    <div id="mySidenav" class="sidenav">
      <!-- contains the cart, login and register section -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="row">
        <div class="col-1">
          <a href="cart.php"><i class="fa fa-shopping-cart fa-lg ml-2 mt-1 mb-3" style="color:white"></i></a>
        </div>
        <div class="col-1">
          <a href="empty-cart.php"><i class="fa fa-cart-plus fa-lg ml-2 mt-1" style="color:white"></i></a>
        </div>
        <div class="col-3">
          <a class="ml-3 mr-3" href="login.php" style="color:white">Login</a>
        </div>
        <div class="col">
          <a href="signup.php" style="color:white">Signup</a>
        </div>
      </div>
      <!-- contains the body section of the nav bar for the small device -->
      <ul class="navbar-nav ml-2">
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

    </div>

    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
  </div>