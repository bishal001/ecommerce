<html>

<head>
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <?php include'nav.php'?>
</head>

<body>
  <div class="container">
    <div class="text-center mb-3 sticky-top">
      <button class="btn btn-dangers" onclick="change()">Load images</button>
    </div>
    <!--Creating the body part-->
    <div class="row">
      <div class="col-xl-6 col-lg-5 col-md-7 mx-auto mb-3">
        <!--Creating a carousel-->
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!--defining the number of items to keep in the slider-->
          <ul class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ul>

          <!--defining the items to display in slider-->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://placehold.it/520x390" id="img-1" class="img-fluid" alt="Responsive image">
            </div>

            <div class="carousel-item">
              <img src="http://placehold.it/520x390" id="img-2" class="img-fluid" alt="Responsive image">
            </div>

            <div class="carousel-item">
              <img src="http://placehold.it/520x390" id="img-3" class="img-fluid" alt="Responsive image">
            </div>

            <div class="carousel-item">
              <img src="http://placehold.it/520x390" id="img-4" class="img-fluid" alt="Responsive image">
            </div>
          </div>

          <!--carousel slide buttons-->
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>

      <!--creating the section of the body-->
      <div class="col-xl-3 col-lg-3">
        <div class="row justify-content-center">
          <div class="shadow">
           <img src="http://placehold.it/275x190" id="img-5" class="img-fluid" alt="Responsive image">
          </div>
        </div>

        <div class="row justify-content-center my-2">
          <div class="shadow">
          <img src="http://placehold.it/275x190" id="img-6" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4">
        <div class="row justify-content-center">
          <div class="shadow">
          <img src="http://placehold.it/250x390" id="img-7" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!--creating the header for the product section-->
    <div class="card">
      <div class="card-header" style="background-color: #1a8a64; color: white">
        <h4 class="text-start">Products</h4>
      </div>
    </div>
    <!--creating a first body section-->
    <div class="row justify-content-center">
      <div class="col-xl-3 ">
        <div class="container">

          <div class="row justify-content-center my-3">
            <span class="border border-primary">
              <!--creating the shades in the image-->
              <div class="shadow bg-light">
                <div class="img">
                  <a href="product_detail.php"><img src="http://placehold.it/200x300" id="img-8" clas="img-fluid "></a>
                  <!--adding icons when hovered-->
                  <div class="overlay">
                    <button class="btn btn-outline-secondary my-2 mx-2"  type="button">
                      <i class="fa fa-search"></i>
                    </button><br>

                    <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                      <i class="fa fa-heart"></i>
                    </button><br>

                    <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                      <i class="fa fa-heart"></i>
                    </button><br>
                  </div>
                </div>

              <a href="product_detail.php"><h5 class="text-center" style="color: black">Apple</h5></a>
              <!--creating the rating bar-->
              <div class="mx-5">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <h5 class="text-center">Price:</h5>
              <!--creating a add to cart button-->
              <div class="input-group-append">
                <button class="btn btn-dangers my-2 mx-auto" type="button">Add To Cart</button>
              </div>
            </span>
          </div>
          
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="shadow">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-9" clas="img-fluid " alt="img">
              <!--adding icons when hovered-->
              <div class="overlay">
                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-search"></i>
                </button><br>

                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-heart"></i>
                </button><br>

                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-heart-o"></i>
                </button><br>
              </div>
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
        <div class="shadow">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-10" clas="img-fluid " alt="img">
              <!--adding icons when hovered-->
              <div class="overlay">
                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-search"></i>
                </button><br>

                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-heart"></i>
                </button><br>

                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-heart-o"></i>
                </button><br>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <h5 class="text-center my-2">Cauliflower</h5>
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


      <div class="col-xl-3 col-lg-4 col-md-5 mt-2">
        <div class="shadow">
          <div class="row justify-content-center">
            <div class="img">
              <img src="http://placehold.it/220x200" id="img-11" clas="img-fluid " alt="img">
              <!--adding icons when hovered-->
              <div class="overlay">
                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-search"></i>
                </button><br>

                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-heart"></i>
                </button><br>

                <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                  <i class="fa fa-heart-o"></i>
                </button><br>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <h5 class="text-center my-2">Tomato</h5>
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
    <hr>

    <div class="card">
      <div class="card-header" style="background-color:  #1a8a64; color: white">
        <div class="row">
          <div class="col">
            <h4 class="text-start">Best Sellers</h4>
          </div>

          <div class="col">
            <!--creating a navigation button for the owl-->
            <button class="btn next float-right"><i class="fa fa-chevron-right fa-2x" style="color:white"></i></button>
            <button class="btn prev float-right"><i class="fa fa-chevron-left fa-2x" style="color:white"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!--creating the owl carousel-->
      <div class="owl-carousel owl-theme">
        <!--Creating a second body part using flex row-->
        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-12" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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

        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-13" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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

        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-14" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <h5 class="text-center my-2">Tomato</h5>
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

        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-15" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <h5 class="text-center my-2">Lady Finger</h5>
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

        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-16" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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
        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-17" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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
        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-18" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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

        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-19" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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
        <div class="col">
          <div class="shadow p-3 mb-2 bg-light">
            <div class="row justify-content-center">
              <div class="img">
                <img src="http://placehold.it/200x180" id="img-20" clas="img-fluid " alt="img">
                <!--adding icons when hovered-->
                <div class="overlay">
                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-search"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart"></i>
                  </button><br>

                  <button class="btn btn-outline-secondary my-2 mx-2" type="button">
                    <i class="fa fa-heart-o"></i>
                  </button><br>
                </div>
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
      </div>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
  <!--calling the javascript files of the owl carousel-->
  <script src="jquery/jquery.min.js"></script>
  <script src="javascript/owl.carousel.min.js"></script>
  <!--writing the functions of the owl-->
  <script src="javascript/owl_carousel_js.js"></script>

  <script>
    function change(){
      for(i=1; i<21; i++){
        imageNode = document.getElementById('img-'+i);
        imageNode.src = 'images/img-'+i+'.jpg';
      }
    }
  </script>

</body>

</html>