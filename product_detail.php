<!DOCTYPE html>
<html lang="en">

<head>
  <?php include'nav.php'?>
  <style>
  nav>.nav.nav-tabs {

    border: none;
    color: #fff;
    background: #1a8a64;
    border-radius: 0;

  }

  nav>div a.nav-item.nav-link,
  nav>div a.nav-item.nav-link.active {
    border: none;
    padding: 18px 25px;
    background: #1a8a64;
    border-radius: 0;
  }

  nav>div a.nav-item.nav-link.active:after {
    content: "";
    position: relative;
    bottom: -55px;
    left: -10%;
    border: 15px solid transparent;
    border-top-color: #0db04b;
  }



  nav>div a.nav-item.nav-link:hover,
  nav>div a.nav-item.nav-link:focus {
    border: none;
    background: #0db04b;
    color: #0db04b;
    border-radius: 0;
    transition: background 0.20s linear;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="text-center mb-3">
      <button class="btn btn-dangers" onclick="change()">Load images</button>
    </div>
    <div class="row">
      <div class="col-xl-4">
        <div class="row no-gutters justify-content-center">
          <div class="shadow">
          <img src="http://placehold.it/300x220" id="img-1" class="img-fluid ">
          </div>
        </div>
        <div class="row no-gutters pt-3 justify-content-center pb-2">
          <div class="inline">
          <img class="shadow" src="http://placehold.it/80x80" id="img-2" class="img-fluid ">
          <img class="shadow ml-2 mr-2" src="http://placehold.it/80x80" id="img-3" class="img-fluid ">
          <img class="shadow" src="http://placehold.it/80x80" id="img-4" class="img-fluid ">
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="d-flex flex-row">
          <div class="col">
            <h5 class="">Apple Apple Apple Apple Apple Apple Apple</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class=" my-auto">
            <h5>Price: $20</h5>
          </div>
          <hr>
        </div>
        <hr>

        <div class="row text-justify ml-2">
          <p>
            An apple is a sweet, edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are
            the
            most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor,
            Malus sieversii, is still found today.
          </p>
        </div>
        <hr>

        <div class="d-flex flex-row">
          <div class="my-2 pl-3">
            <p class="font-weight-bold">Quantity:</p>
          </div>

          <div class="d-flex flex-row">
            <i class="btn pl-1 fa fa-minus-circle fa-lg my-2" onclick="decrease()"></i>
            <input type="text" size="1" id="quantity" class="calculator-input h-50 my-2" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn pr-2 fa fa-plus-circle fa-lg my-2" onclick="increase()"></i>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div class="input-group-append mr-4">
            <button class="btn btn-dangers my-2" type="button">Add To Cart</button>
          </div>

          <div class="input-group-append">
            <button class="btn btn-dangers my-2" type="button">Buy Now</button>
          </div>

        </div>
      </div>
    </div>

    <!-- creating the tab bar -->
    <div class="row mt-3">
      <div class="col ">
        <!-- tab bar headings -->
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
              aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
              aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
              aria-controls="nav-contact" aria-selected="false">Contact</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
              aria-controls="nav-about" aria-selected="false">About</a>
          </div>
        </nav>
        <!-- tab bar body section -->
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam.
            Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure
            adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
            Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim
            ullamco ad duis occaecat ex.
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam.
            Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure
            adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
            Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim
            ullamco ad duis occaecat ex.
          </div>

          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam.
            Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure
            adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
            Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim
            ullamco ad duis occaecat ex.
          </div>
          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam.
            Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure
            adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.
            Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim
            ullamco ad duis occaecat ex.
          </div>
        </div>

      </div>
    </div>

    <div class="card mt-3">
      <div class="card-header" style="background-color: #1a8a64; color: white">
        <h4 class="text-start">Related Products</h4>
      </div>
    </div>
    <div class="row">

      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="shadow p-3 mb-2 bg-light">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-9" clas="img-fluid " alt="img">

            </div>
          </div>

          <div class="row justify-content-center">
            <h5 class="text-center my-2">Orange</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating the rating bar-->
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>

          </div>

          <div class="row justify-content-center">
            <h5 class="text-center">Price:</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating a add to cart button-->
            <div class="input-group-append">
              <button class="btn btn-dangers my-2 mx-auto" type="button">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="shadow p-3 mb-2 bg-light">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-9" clas="img-fluid " alt="img">

            </div>
          </div>

          <div class="row justify-content-center">
            <h5 class="text-center my-2">Apple</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating the rating bar-->
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>

          </div>

          <div class="row justify-content-center">
            <h5 class="text-center">Price:</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating a add to cart button-->
            <div class="input-group-append">
              <button class="btn btn-dangers my-2 mx-auto" type="button">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="shadow p-3 mb-2 bg-light">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-9" clas="img-fluid " alt="img">

            </div>
          </div>

          <div class="row justify-content-center">
            <h5 class="text-center my-2">Mango</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating the rating bar-->
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>

          </div>

          <div class="row justify-content-center">
            <h5 class="text-center">Price:</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating a add to cart button-->
            <div class="input-group-append">
              <button class="btn btn-dangers my-2 mx-auto" type="button">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="shadow p-3 mb-2 bg-light">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-9" clas="img-fluid " alt="img">

            </div>
          </div>

          <div class="row justify-content-center">
            <h5 class="text-center my-2">Kiwi</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating the rating bar-->
            <div>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>

          </div>

          <div class="row justify-content-center">
            <h5 class="text-center">Price:</h5>
          </div>

          <div class="row justify-content-center">
            <!--creating a add to cart button-->
            <div class="input-group-append">
              <button class="btn btn-dangers my-2 mx-auto" type="button">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <hr>
  <?php include'footer_2.php'?>
  <!-- javascript code to increase or decrease the value for the quantity -->
  <script>
  var i = 0;

  function increase() {
    document.getElementById('quantity').value = ++i;
  }

  function decrease() {
    document.getElementById('quantity').value = --i;
  }
  </script>

  <script>
  function change() {
    imageNode = document.getElementById('img-1');
    imageNode.src = 'images/img_21.jpg';

  }
  </script>
</body>

</html>