
  <div class="container shadow-lg bg-white">
    <?php include'nav.php'?>    
    <h4 class="font-weight-bold text-center">Seller Registration</h4>
    <div class="d-flex flex-row justify-content-center">
      <p class="mr-1">Alredy have account</p>
      <a href="login.php" style="color:blue">Login</a>
    </div>
    <!-- icon section -->
    <div class="shadow mx-auto" style="width:72%; background-color:#1a8a64">
      <div class="row justify-content-center mb-2" >
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 mt-2">
          <div class="row no-gutters justify-content-center">
            <i class="fa fa-pencil fa-edit fa-3x" style="color:#0db04b"></i>
          </div>
          <div class="row no-gutters text-center">
            <p class=" font-weight-bold" style="color:white">Personal Detail</p>
          </div>
        </div>

        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 mt-2">
          <div class="row no-gutters justify-content-center">
            <i class="fa fa-user-o fa-user fa-3x ml-3 mr-3" style="color:#0db04b"></i>
          </div>
          <div class="row no-gutters text-center">
            <p class=" font-weight-bold text">Seller Information</p>
          </div>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 mt-2">
          <div class="row no-gutters justify-content-center">
            <i class="fa fa-credit-card fa-3x" style="color:#0db04b"></i>
          </div>
          <div class="row no-gutters text-center">
            <p class=" font-weight-bold text">Payment Detail</p>
          </div>
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
              <label for="bank" class="text">Seller Bank Detail</label>
              <textarea name="bankDetail" id="bank" class="form-control background placeholdColor" placeholder="Seller Bank Detail"
                cols="100" rows="7"></textarea>
            </div>
          </div>
          <!-- text detail for the taxation type and tax identification-->
          <div class="row">
            <div class="col-xl-6">
              <label for="Taxation" class="text">Select Taxation type</label>
              <select name="Taxation" id="Taxation" class="form-control background placeholdColor">
                <option value="">--Select--</option>
                <option value="pan">PAN</option>
                <option value="vat">VAT</option>
              </select>
            </div>
            <div class="col-xl-6">
              <label for="Tax" class="text">Tax Identification number (PAN/VAT)</label>
              <input type="Tax" class="form-control background placeholdColor" placeholder="Tax Identification number (PAN/VAT)"
                id="snTaxame">
            </div>
          </div>
          <!-- textfield for the company reg num and ips connect id -->
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="Company" class="text">Company Registration Number</label>
              <input type="Company" class="form-control background placeholdColor" placeholder="Company Registration Number"
                id="Company">
            </div>
            <div class="col-xl-6">
              <label for="IPS" class="text">IPS Connect ID</label>
              <input type="IPS" class="form-control background placeholdColor" placeholder="IPS Connect ID" id="IPS">
            </div>
          </div>
          <button type="submit" class="btn btn-dangers float-right font-weight-bold">Next<i class="fa fa-arrow-right ml-1"></i></button>
        </form>
        
        <button onclick="goBack()" class="btn btn-dangers mr-4 float-right font-weight-bold"><i class="fa fa-arrow-left mr-1"></i>Previous</button>
      </div>
    </div>
    <hr>
  <?php include'footer_2.php'?>
  </div>    
  <!-- javascript code to go back -->
<script>
  function goBack() {
    window.history.back()
}
</script>
