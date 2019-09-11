<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
  <div class="row">
    <div class="col-xl-9">
      <div class="shadow-sm bg-white">
        <!-- creating the table to store the cart detail -->
        <table class="table table-borderless">
          <!-- table heading -->
          <tr class="table-secondary">
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
              <div class="d-flex flex-row">
                <img src="http://placehold.it/90x90" class="img-fluid mr-3">
                <p>Apple</p>
              </div>
            </td>
            <td>
              <!-- contains the quantity detail -->
              <div class="d-flex flex-row">
                <i class="btn fa fa-minus-circle fa-lg" onclick="decrease()"></i>
                <input type="text" size="1" id="quantity" class="calculator-input" value="0"
                  onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                <i class=" btn fa fa-plus-circle fa-lg" onclick="increase()"></i>
              </div>
            </td>
            <td>
              <!-- contans the price detail -->
              <p>$10</p>
            </td>
            <td>
              <!-- contains the icons for the edit -->
              <div class="d-flex flex-row mt-1">
                <i class="fa fa-trash fa-lg mr-3"></i>
                <i class="fa fa-refresh fa-lg"></i>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- this row contains the product name and image -->
              <div class="d-flex flex-row">
                <img src="http://placehold.it/90x90" class="img-fluid mr-3">
                <p>Orange</p>
              </div>
            </td>
            <td>
              <!-- contains the quantity detail -->
              <div class="d-flex flex-row">
                <i class="btn fa fa-minus-circle fa-lg" onclick="decrease()"></i>
                <input type="text" size="1" id="quantity" class="calculator-input" value="0"
                  onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                <i class=" btn fa fa-plus-circle fa-lg" onclick="increase()"></i>
              </div>
            </td>
            <td>
              <!-- contans the price detail -->
              <p>$10</p>
            </td>
            <td>
              <!-- contains the icons for the edit -->
              <div class="d-flex flex-row mt-1">
                <i class="fa fa-trash fa-lg mr-3"></i>
                <i class="fa fa-refresh fa-lg"></i>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <!-- shows the totla price and checkout button -->
    <div class="col-xl-3">
      <div class="card">
        <div class="card-header">
          <h5>Order Total</h5>
        </div>
        <div class="card-body">
          <div class="row mx-auto">
            <p class="font-weight-bold">Sub-Total: $10</p>
          </div>
          <div class="row mx-auto">
            <p class="font-weight-bold">VAT: 0</p>
          </div>
          <div class="row mx-auto">
            <p class="font-weight-bold">Grand-Total: $10</p>
          </div>
          <div>
            <button class="btn btn-dangers my-2" type="button" style="color:white">Checkout</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
  <script>
  var i = 0;

  function increase() {
    document.getElementById('quantity').value = ++i;
  }

  function decrease() {
    document.getElementById('quantity').value = --i;
  }
  </script>