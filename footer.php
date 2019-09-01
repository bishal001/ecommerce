<html>

<head>
  <!--calling bootstrap 4 files and custom css-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--calling bootstrap files-->
  <script src="jquery/jquery-3.3.1.slim.min.js"></script>
  <script src="jquery/popper.min.js"></script>
  <script src="javascript/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style type="text/css">
  .footerLink {
    color: white;
  }
  </style>
</head>

<body>
  <!--started the main container-->
  <div class="container " style="background-color:#1a8a64;">

    <!--created the row for the company name-->
    <div class="row justify-content-center pt-5 pb-5 ">
      <h3 class="footerLink">Company Name</h3>
    </div>

    <!--links available in the footer-->
    <div class="row justify-content-center">
      <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2">
        <a href="_home.php" class="footerLink">Home</a>
      </div>
      <div class="col-xl-1 col-lg-2 col-md-2 col-sm-3">
        <a href="#" class="footerLink">About us</a>
      </div>
      <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2">
        <a href="contact.php" class="footerLink">Contact</a>
      </div>
      <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2">
        <a href="#" class="footerLink">Home</a>
      </div>
      <div class="col-xl-1 col-lg-2 col-md-2 col-sm-1">
        <a href="#" class="footerLink">Home</a>
      </div>

    </div>

    <!--creating the social media icons-->
    <div class="d-flex flex-row pt-5 pb-5 justify-content-center align-items-center">
      <h6 class="footerLink">Follow us:</h6>

      <button class="btn " type="button" style="color:white">
        <i class="fa fa-facebook-square fa-lg"></i>
      </button>

      <button class="btn " type="button" style="color:white">
        <i class="fa fa-instagram fa-lg"></i>
      </button>

      <button class="btn " type="button" style="color:white">
        <i class="fa fa-skype fa-lg"></i>
      </button>

      <button class="btn " type="button" style="color:white">
        <i class="fa fa-linkedin-square fa-lg"></i>
      </button>

      <button class="btn " type="button" style="color:white">
        <i class="fa fa-google-plus fa-lg"></i>
      </button>
    </div>

    <!--Adding company address, email, contact no-->
    <div class="d-flex flex-row pb-4 justify-content-center align-items-center">
      <div>
        <h6 class="footerLink mb-2 fa fa-map-marker"> Nepal, Kathmandu</h6>
      </div>
      <div class="pl-3 pr-3">
        <h6 class="footerLink mb-2 fa fa-mobile-phone"> +977-1234567890</h6>
      </div>
      <div>
        <h6 class="footerLink mb-2 fa fa-envelope"> abc@gmail.com</h6>
      </div>
    </div>

    <!--creating the card to keep privacy policy part-->

      <div class="row mb-2 justify-content-center">
				<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 mt-1">
					<p class="font-weight-bold fa fa-copyright ">Copyright 2019</p>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-2">
					<a href="#" style="color:black;">Terms</a>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-2">
					<a href="#" style="color:black;">Terms</a>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-2 col-sm-2">
					<a href="#" style="color:black;">Terms</a>
				</div>
				</div>
    </div>

  </div>
</body>

</html>