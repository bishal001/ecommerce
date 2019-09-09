<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  /* css for the background image of the shadow */
  .bg {
    background-image: url("images/form_background.jpg");
    background-repeat: no-repeat;
    background-color: #cccccc;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    width: 800px;
    height: auto;
  }

  .text {
    /* css for the label color */
    color: white;
  }

  .background {
    /* css for the text field */
    background-color: red;
    color: white;
    width: 70%;
    box-sizing: border-box;
    border: none;
  }

  .badge {
    font-size: 20px;
    color: white;
    background-color: #03b100;
    border: none;
  }

  body {
    background-image: url("images/background.jpg");
    background-repeat: no-repeat;
    background-color: #cccccc;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
  }
  </style>
</head>

<body>
  <div class="container shadow-lg bg-white p-1">
    <?php include'nav.php'?>
    <h4 class="font-weight-bold text-center">Seller Registration</h4>
    <div class="d-flex flex-row justify-content-center">
      <p class="mr-1">Alredy have account</p>
      <a href="login.php" style="color:blue">Login</a>
    </div>
    <!-- icon section -->
    <div class="row justify-content-center">
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 mt-2">
        <div class="row no-gutters mx-5">
          <i class="fa fa-pencil fa-edit fa-3x" style="color: blue"></i>
        </div>
        <div class="row no-gutters text-center">
          <p class=" font-weight-bold" style="color:blue">Personal Detail</p>
        </div>
      </div>

      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4">
        <div class="row no-gutters mx-4">
          <i class="fa fa-user-o fa-user fa-3x ml-3 mr-3 mb-2" style="color: blue"></i>
        </div>
        <div class="row no-gutters text-center">
          <p class=" font-weight-bold" style="color: blue">Seller Information</p>
        </div>
      </div>

      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 mt-2">
        <div class="row no-gutters mx-4">
          <i class="fa fa-credit-card fa-3x" style="color:blue"></i>
        </div>
        <div class="row no-gutters text-center">
          <p class=" font-weight-bold" style="color:blue">Payment Detail</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="shadow p-1 bg-white bg" style="width:70%">
        <!-- creatin a register form and setting the action-->
        <form action="_home.php">
          <!-- text field for the seller bank detail -->
          <div class="row">
            <div class="col">
              <label for="bank" class="text">Seller Bank Detail:</label>
              <textarea name="bankDetail" id="bank" class="form-control background" placeholder="Seller Bank Detail"
                cols="100" rows="7"></textarea>
            </div>
          </div>
          <!-- text detail for the taxation type and tax identification-->
          <div class="row">
            <div class="col-xl-6">
              <label for="Taxation" class="text">Select Taxation type:</label>
              <select name="Taxation" id="Taxation" class="form-control background">
                <option value="">--Select--</option>
                <option value="pan">PAN</option>
                <option value="vat">VAT</option>
              </select>
            </div>
            <div class="col-xl-6">
              <label for="Tax" class="text">Tax Identification number (PAN/VAT):</label>
              <input type="Tax" class="form-control background" placeholder="Tax Identification number (PAN/VAT)"
                id="snTaxame">
            </div>
          </div>
          <!-- textfield for the company reg num and ips connect id -->
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="Company" class="text">Company Registration Number:</label>
              <input type="Company" class="form-control background" placeholder="Company Registration Number"
                id="Company">
            </div>
            <div class="col-xl-6">
              <label for="IPS" class="text">IPS Connect ID:</label>
              <input type="IPS" class="form-control background" placeholder="IPS Connect ID" id="IPS">
            </div>
          </div>
          <button type="submit" class="btn btn-dangers float-right">Register</button>
        </form>
        
        <button onclick="goBack()" class="btn btn-dangers mr-4 float-right">Previous</button>
      </div>
    </div>
  </div>    
  <!-- javascript code to go back -->
<script>
  function goBack() {
    window.history.back()
}
</script>
</body>

</html>