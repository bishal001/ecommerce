<html>

<head>
  <?php include'nav.php'?>
  <style>
  .row.no-gutters {
    margin-right: 0;
    margin-left: 0;

    &>[class^="col-"],
    &>[class*=" col-"] {
      padding-right: 0;
      padding-left: 0;
    }
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <div class="row no-gutters">
          <div class="shadow-sm p-2 mb-2 bg-white">
            <div class="d-flex flex-row">
              <div class="col-xl-2">
                <img src="http://placehold.it/90x90" class="img-fluid ">
              </div>

              <div class="col-xl-9">
                <h5>Apple: Apple Apple Apple Apple Apple Apple </h5>
                <div class="d-flex flex-row">
                  <div class="my-2">
                    <p class="pr-4 font-weight-bold">Price: $10</p>
                  </div>
                  <div class="my-2">
                    <p class=" font-weight-bold">Quantity:</p>
                  </div>
                  <div class="d-flex flex-row">
                    <i class="btn pl-1 fa fa-minus-circle fa-lg my-2" onclick="decrease()"></i>
                    <input type="text" size="1" id="quantity" class="calculator-input h-50 my-2" value="0"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <i class=" btn pr-2 fa fa-plus-circle fa-lg my-2" onclick="increase()"></i>
                  </div>
                  <div>
                    <i class="fa fa-remove fa-lg pl-2 mt-3" style="color:red"></i>     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="shadow-sm p-2 mb-2 bg-white">
            <div class="d-flex flex-row">
              <div class="col-xl-2">
                <img src="http://placehold.it/90x90" class="img-fluid ">
              </div>

              <div class="col-xl-9">
                <h5>Apple: Apple Apple Apple Apple Apple Apple </h5>
                <div class="d-flex flex-row">
                  <div class="my-2">
                    <p class="pr-4 font-weight-bold">Price: $10</p>
                  </div>
                  <div class="my-2">
                    <p class=" font-weight-bold">Quantity:</p>
                  </div>
                  <div class="d-flex flex-row">
                    <i class="btn pl-1 fa fa-minus-circle fa-lg my-2" onclick="decrease()"></i>
                    <input type="text" size="1" id="quantity" class="calculator-input h-50 my-2" value="0"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <i class=" btn pr-2 fa fa-plus-circle fa-lg my-2" onclick="increase()"></i>
                  </div>

                  <div>
                    <i class="fa fa-remove fa-lg pl-2 mt-3" style="color:red"></i>     
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="shadow-sm p-2 mb-2 bg-white">
            <div class="d-flex flex-row">
              <div class="col-xl-2">
                <img src="http://placehold.it/90x90" class="img-fluid ">
              </div>

              <div class="col-xl-9">
                <h5>Apple: Apple Apple Apple Apple Apple Apple </h5>
                <div class="d-flex flex-row">
                  <div class="my-2">
                    <p class="pr-4 font-weight-bold">Price: $10</p>
                  </div>
                  <div class="my-2">
                    <p class=" font-weight-bold">Quantity:</p>
                  </div>
                  <div class="d-flex flex-row">
                    <i class="btn pl-1 fa fa-minus-circle fa-lg my-2" onclick="decrease()"></i>
                    <input type="text" size="1" id="quantity" class="calculator-input h-50 my-2" value="0"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <i class=" btn pr-2 fa fa-plus-circle fa-lg my-2" onclick="increase()"></i>
                  </div>

                  <div>
                    <i class="fa fa-remove fa-lg pl-2 mt-3" style="color:red"></i>     
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="shadow-sm p-2 mb-2 bg-white">
            <div class="d-flex flex-row">
              <div class="col-xl-2">
                <img src="http://placehold.it/90x90" class="img-fluid ">
              </div>

              <div class="col-xl-9">
                <h5>Apple: Apple Apple Apple Apple Apple Apple </h5>
                <div class="d-flex flex-row">
                  <div class="my-2">
                    <p class="pr-4 font-weight-bold">Price: $10</p>
                  </div>
                  <div class="my-2">
                    <p class=" font-weight-bold">Quantity:</p>
                  </div>
                  <div class="d-flex flex-row">
                    <i class="btn pl-1 fa fa-minus-circle fa-lg my-2" onclick="decrease()"></i>
                    <input type="text" size="1" id="quantity" class="calculator-input h-50 my-2" value="0"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <i class=" btn pr-2 fa fa-plus-circle fa-lg my-2" onclick="increase()"></i>
                  </div>

                  <div>
                    <i class="fa fa-remove fa-lg pl-2 mt-3" style="color:red"></i>     
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
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

  </div>
  <hr>
  <?php include'footer.php'?>
  <script>
  var i = 0;

  function increase() {
    document.getElementById('quantity').value = ++i;
  }

  function decrease() {
    document.getElementById('quantity').value = --i;
  }
  </script>
</body>

</html>