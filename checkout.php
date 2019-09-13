<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
  <div class="row">
    <div class="col text-center">
      <h4 class="font-weight-bold">Checkout</h4>
    </div>
  </div>
  <div class="row no-gutters">
    <div class="col-xl-7">
      <div class="shadow p-1 bg-white bg">
        <!-- creatin a register form and setting the action for the checkout page-->
        <form action="_home.php">
          <!-- creating the personial detail section -->
          <span class="badge">Your Personal Details</span>
          <hr>
          <p class="text">Registering As</p>
          <div class="row mb-3">
            <div class="col-xl-6 col-md-6">
              <label for="fname" class="text">First Name</label>
              <input type="text" class="form-control background placeholdColor" placeholder="First Name" id="fname"
                required>
            </div>
            <div class="col-xl-6 col-md-6">
              <label for="lname" class="text">Last Name</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Last Name" id="lname"
                required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6 col-md-6">
              <label for="email" class="text">E-mail</label>
              <input type="email" class="form-control background placeholdColor" placeholder="E-mail" id="email"
                required>
            </div>
            <div class="col-xl-6 col-md-6">
              <label for="number" class="text">Mobile Number</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Mobile Number" id="number"
                required>
            </div>
          </div>
          <!-- creating the password section -->
          <span class="badge">Your Password</span>
          <hr>
          <div class="row mb-3">
            <div class="col-xl-6 col-md-6">
              <label for="password" class="text">Password</label>
              <input type="password" class="form-control background placeholdColor" placeholder="Password" id="password"
                required>
            </div>
            <div class="col-xl-6 col-md-6">
              <label for="cpsw" class="text">Password Confirm</label>
              <input type="password" class="form-control background placeholdColor" placeholder="Password Confirm"
                id="cpsw" required>
            </div>
          </div>
          <!-- creating the newsletter section -->
          <span class="badge">Newsletter</span>
          <hr>
          <div class="row mb-3">
            <div class="col">
              <!-- creating a dorpdown for the newsletter -->
              <select name="newsletter" class="form-control background placeholdColor">
                <option value="select">--Subscribe--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col text-center">
              <button type="submit" class="btn btn-dangers w-50 font-weight-bold">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-xl-5">
      
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
</div>