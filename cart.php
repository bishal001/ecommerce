<html>

<head>
  <?php include'nav.php'?>
 
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-9">
        <table class="table table-borderless">
          <tr class="table-secondary">
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th></th>
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