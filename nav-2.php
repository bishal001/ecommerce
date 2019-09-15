<?php include'header.php'?>
<style>

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0db04b;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
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

<body style="color:#0db04b">
  <div class="d-block d-md-none sticky-top">
    <div id="mySidenav" class="sidenav ">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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