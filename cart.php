<html>

<head>
  <?php include'nav.php'?>
 
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-9">
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
              <div class="row">
                <div class="col-xl-3">
                  <img src="http://placehold.it/90x90" class="img-fluid ">
                </div>
                <div class="col-xl-9 p-0">
                  <p>Apple: Red Delicious. Crunchy and Mildly Sweet</p>
                </div>
              </div>
            </td>
            <td>
              <!-- contains the quantity detail -->
              <i class="btn fa fa-minus-circle fa-lg" onclick="decrease()"></i>
              <input type="text" size="1" id="quantity" class="calculator-input" value="0"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
              <i class=" btn fa fa-plus-circle fa-lg" onclick="increase()"></i>
            </td>
            <td>
              <p>$10</p>
            </td>
            <td>
              <i class="fa fa-trash fa-lg"></i>   
            </td>
          </tr>
        </table>
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
</body>

</html>