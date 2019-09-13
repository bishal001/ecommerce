<div class="container shadow-lg bg-white ">
  <?php include'nav.php'?>
  <!--cart section upto medium device-->
  <div class="d-none d-md-block ">
    <div class="row ">
      <div class="col-xl-7 col-lg-7 ">
        <div class="shadow-sm" style="width:100%; background-color:#00c14a">
          <!-- creating the table to store the cart detail -->
          <table class="table table-borderless ">
            <!-- table heading -->
            <tr class="table-secondary text-center">
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Edit</th>
              <th></th>
            </tr>
            <!-- table body -->
            <tr>
              <td>
                <!-- this row contains the product name and image -->
                <div class="row no-gutters">
                  <div class="col-xl-5 col-lg col-md-4">
                    <img src="http://placehold.it/90x90" class="img-fluid mr-3">
                  </div>
                  <div class="col-xl-7 col-lg col-md-8">
                    <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
                  </div>
                </div>
              </td>
              <td>
                <!-- contains the quantity detail -->
                <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                  onkeypress="return event.charCode >= 48 && event.charCode <= 57">
              </td>
              <td>
                <!-- contans the price detail -->
                <p class="text">$10</p>
              </td>
              <td>
                <!-- contains the icons for the edit -->
                <div class="d-flex flex-row mt-1">
                  <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
                  <i class="fa fa-refresh fa-lg" style="color:white"></i>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <!-- this row contains the product name and image -->
                <div class="row no-gutters">
                  <div class="col-xl-5 col-lg col-md-4">
                    <img src="http://placehold.it/90x90" class="img-fluid mr-3">
                  </div>
                  <div class="col-xl-7 col-lg col-md-8">
                    <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
                  </div>
                </div>
              </td>
              <td>
                <!-- contains the quantity detail -->
                <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                  onkeypress="return event.charCode >= 48 && event.charCode <= 57">
              </td>
              <td>
                <!-- contans the price detail -->
                <p class="text">$10</p>
              </td>
              <td>
                <!-- contains the icons for the edit -->
                <div class="d-flex flex-row mt-1">
                  <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
                  <i class="fa fa-refresh fa-lg" style="color:white"></i>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <!-- this row contains the product name and image -->
                <div class="row no-gutters">
                  <div class="col-xl-5 col-lg col-md-4">
                    <img src="http://placehold.it/90x90" class="img-fluid mr-3">
                  </div>
                  <div class="col-xl-7 col-lg col-md-8">
                    <p class="text">Aalu (Potato) 500 Gram (Vegetable-Local)</p>
                  </div>
                </div>
              </td>
              <td>
                <!-- contains the quantity detail -->
                <input type="text" size="1" id="quantity" class="calculator-input background" value="2"
                  onkeypress="return event.charCode >= 48 && event.charCode <= 57">
              </td>
              <td>
                <!-- contans the price detail -->
                <p class="text">$10</p>
              </td>
              <td>
                <!-- contains the icons for the edit -->
                <div class="d-flex flex-row mt-1">
                  <i class="fa fa-trash fa-lg mr-3" style="color:white"></i>
                  <i class="fa fa-refresh fa-lg" style="color:white"></i>
                </div>
              </td>
            </tr>
          </table>
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
                <button type="submit" class="btn btn-dangers mt-3 font-weight-bold" style="width:200px">Checkout</button>
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
                <button type="submit" class="btn btn-dangers mt-3 font-weight-bold" style="width:200px">Checkout</button>
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