<div class="container shadow-lg bg-white ">
  <?php include'nav.php'?>
  <div class="row">
    <div class="col text-center">
      <h3 class="font-weight-bold mb-3">CART</h3>
    </div>
  </div>
  <!--cart section upto medium device-->
  <div class="d-none d-md-block ">
    <div class="row ">
      <div class="col-xl-7 col-lg-7">
        <div class="shadow p-1 bg-white">
          <div class="row mb-3">
            <div class="col-xl-2 col-lg-3 col-md-2">
              <img src="http://placehold.it/90x90" class="img-fluid">
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6">
              <p class="font-weight-bold">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-2">
              <div class="row">
                <div class="col my-auto">
                  <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="col">
                  <div class="row mb-2">
                    <i class="fa fa-refresh ml-2"></i>
                  </div>
                  <div class="row">
                    <i class="fa fa-trash-o ml-2"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2">
              <p class="font-weight-bold">Price: $10</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-xl-2 col-lg-3 col-md-2">
              <img src="http://placehold.it/90x90" class="img-fluid">
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6">
              <p class="font-weight-bold">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-2">
              <div class="row">
                <div class="col my-auto">
                  <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="col">
                  <div class="row mb-2">
                    <i class="fa fa-refresh ml-2"></i>
                  </div>
                  <div class="row">
                    <i class="fa fa-trash-o ml-2"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2">
              <p class="font-weight-bold">Price: $10</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-xl-2 col-lg-3 col-md-2">
              <img src="http://placehold.it/90x90" class="img-fluid">
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6">
              <p class="font-weight-bold">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-2">
              <div class="row">
                <div class="col my-auto">
                  <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="col">
                  <div class="row mb-2">
                    <i class="fa fa-refresh ml-2"></i>
                  </div>
                  <div class="row">
                    <i class="fa fa-trash-o ml-2"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2">
              <p class="font-weight-bold">Price: $10</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-xl-2 col-lg-3 col-md-2">
              <img src="http://placehold.it/90x90" class="img-fluid">
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6">
              <p class="font-weight-bold">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-2">
              <div class="row">
                <div class="col my-auto">
                  <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="col">
                  <div class="row mb-2">
                    <i class="fa fa-refresh ml-2"></i>
                  </div>
                  <div class="row">
                    <i class="fa fa-trash-o ml-2"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2">
              <p class="font-weight-bold">Price: $10</p>
            </div>
          </div>
        </div>
      </div>
      <!-- shows the totla price and checkout button -->
      <div class="col-xl-5 col-lg-5">
        <div class="card">
          <div class="card-header text-center">
            <h5>Order Total</h5>
          </div>
          <div class="card-body">
            <div class="row no-gutters">
              <p class="font-weight-bold mx-auto">Sub-Total: $10</p>
            </div>
            <div class="row no-gutters">
              <p class="font-weight-bold mx-auto">VAT: 0</p>
            </div>
            <div class="row no-gutters">
              <p class="font-weight-bold mx-auto">Grand-Total: $10</p>
            </div>
            <div class="text-center">
              <form action="checkout.php">
                <button type="submit" class="btn btn-dangers mt-3 font-weight-bold"
                  style="width:200px">Checkout</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--cart section for the small device -->
  <div class="shadow-lg d-block d-md-none" style="background-color:#00c14a">

    <div class="row no-gutters">
      <!--contains the image-->
      <div class="col-4">
        <img src="http://placehold.it/90x90" class="img-fluid ml-2 mt-2">
      </div>
      <!--contains the product name, quantity and price-->
      <div class="col-8">
        <!--stores the product name-->
        <div class="row no-gutters">
          <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
        </div>

        <div class="row no-gutters">
          <!--stores the quantity-->
          <div class="col-6">
            <i class="btn fa fa-minus-circle fa-lg text" onclick="decrease_sm()"></i>
            <input type="text" size="1" id="quantity_sm" class="calculator-input background" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn fa fa-plus-circle fa-lg text" onclick="increase_sm()"></i>
          </div>
          <!--stores the price detail-->
          <div class="col-6">
            <p class="text d-inline mr-2">Price: $10</p>
            <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row no-gutters">
      <!--contains the image-->
      <div class="col-4">
        <img src="http://placehold.it/90x90" class="img-fluid ml-2 mt-2">
      </div>
      <!--contains the product name, quantity and price-->
      <div class="col-8">
        <!--stores the product name-->
        <div class="row no-gutters">
          <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
        </div>

        <div class="row no-gutters">
          <!--stores the quantity-->
          <div class="col-6">
            <i class="btn fa fa-minus-circle fa-lg text" onclick="decrease_sm()"></i>
            <input type="text" size="1" id="quantity_sm" class="calculator-input background" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn fa fa-plus-circle fa-lg text" onclick="increase_sm()"></i>
          </div>
          <!--stores the price detail-->
          <div class="col-6">
            <p class="text d-inline mr-2">Price: $10</p>
            <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row no-gutters">
      <!--contains the image-->
      <div class="col-4">
        <img src="http://placehold.it/90x90" class="img-fluid ml-2 mt-2">
      </div>
      <!--contains the product name, quantity and price-->
      <div class="col-8">
        <!--stores the product name-->
        <div class="row no-gutters">
          <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
        </div>

        <div class="row no-gutters">
          <!--stores the quantity-->
          <div class="col-6">
            <i class="btn fa fa-minus-circle fa-lg text" onclick="decrease_sm()"></i>
            <input type="text" size="1" id="quantity_sm" class="calculator-input background" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn fa fa-plus-circle fa-lg text" onclick="increase_sm()"></i>
          </div>
          <!--stores the price detail-->
          <div class="col-6">
            <p class="text d-inline mr-2">Price: $10</p>
            <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row no-gutters">
      <!--contains the image-->
      <div class="col-4">
        <img src="http://placehold.it/90x90" class="img-fluid ml-2 mt-2">
      </div>
      <!--contains the product name, quantity and price-->
      <div class="col-8">
        <!--stores the product name-->
        <div class="row no-gutters">
          <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
        </div>

        <div class="row no-gutters">
          <!--stores the quantity-->
          <div class="col-6">
            <i class="btn fa fa-minus-circle fa-lg text" onclick="decrease_sm()"></i>
            <input type="text" size="1" id="quantity_sm" class="calculator-input background" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn fa fa-plus-circle fa-lg text" onclick="increase_sm()"></i>
          </div>
          <!--stores the price detail-->
          <div class="col-6">
            <p class="text d-inline mr-2">Price: $10</p>
            <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row no-gutters">
      <!--contains the image-->
      <div class="col-4">
        <img src="http://placehold.it/90x90" class="img-fluid ml-2 mt-2">
      </div>
      <!--contains the product name, quantity and price-->
      <div class="col-8">
        <!--stores the product name-->
        <div class="row no-gutters">
          <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
        </div>

        <div class="row no-gutters">
          <!--stores the quantity-->
          <div class="col-6">
            <i class="btn fa fa-minus-circle fa-lg text" onclick="decrease_sm()"></i>
            <input type="text" size="1" id="quantity_sm" class="calculator-input background" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn fa fa-plus-circle fa-lg text" onclick="increase_sm()"></i>
          </div>
          <!--stores the price detail-->
          <div class="col-6">
            <p class="text d-inline mr-2">Price: $10</p>
            <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row no-gutters">
      <!--contains the image-->
      <div class="col-4">
        <img src="http://placehold.it/90x90" class="img-fluid ml-2 mt-2">
      </div>
      <!--contains the product name, quantity and price-->
      <div class="col-8">
        <!--stores the product name-->
        <div class="row no-gutters">
          <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
        </div>

        <div class="row no-gutters">
          <!--stores the quantity-->
          <div class="col-6">
            <i class="btn fa fa-minus-circle fa-lg text" onclick="decrease_sm()"></i>
            <input type="text" size="1" id="quantity_sm" class="calculator-input background" value="0"
              onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <i class=" btn fa fa-plus-circle fa-lg text" onclick="increase_sm()"></i>
          </div>
          <!--stores the price detail-->
          <div class="col-6">
            <p class="text d-inline mr-2">Price: $10</p>
            <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- section for the total amount -->
    <div class="row no-gutters">
      <div class="col">
        <div class="card">
          <div class="card-header text-center">
            <h5>Order Total</h5>
          </div>
          <div class="card-body">
            <div class="row no-gutters">
              <p class="font-weight-bold mx-auto">Sub-Total: $10</p>
            </div>
            <div class="row no-gutters">
              <p class="font-weight-bold mx-auto">VAT: 0</p>
            </div>
            <div class="row no-gutters">
              <p class="font-weight-bold mx-auto">Grand-Total: $10</p>
            </div>
            <div class="text-center">
              <form action="checkout.php">
                <button type="submit" class="btn btn-dangers mt-3 font-weight-bold"
                  style="width:200px">Checkout</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
</div>
<script>
var i = 0;

function increase() {
  document.getElementById('quantity').value = ++i;
}

function decrease() {
  document.getElementById('quantity').value = --i;
}

function increase_sm() {
  document.getElementById('quantity_sm').value = ++i;
}

function decrease_sm() {
  document.getElementById('quantity_sm').value = --i;
}
</script>