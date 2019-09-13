<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
  <div class="row">
    <div class="col text-center">
      <h3 class="font-weight-bold">CHECKOUT</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-left col-xl-6 mb-3">
      <div class="shadow p-1 bg">
        <!-- creatin a register form and setting the action for the checkout page-->
        <form>
          <!-- creating the personial detail section -->
          <span class="badge">Your Personal Details</span>
          <hr>
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
          <span class="badge">Your Address</span>
          <hr>
          <div class="row mb-3">
            <div class="col-xl-6 col-md-6">
              <label for="add1" class="text">Address-1</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Address-1" id="add1"
                required>
            </div>
            <div class="col-xl-6 col-md-6">
              <label for="add2" class="text">Address-2</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Address-2" id="add2">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6 col-md-6">
              <label for="city" class="text">City</label>
              <input type="text" class="form-control background placeholdColor" placeholder="City" id="city" required>
            </div>
            <div class="col-xl-6 col-md-6">
              <label for="post" class="text">Post Code</label>
              <input type="text" class="form-control background placeholdColor" placeholder="Post Code" id="post">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="country" class="text">Country</label>
              <select name="newsletter" class="form-control background placeholdColor">
                <option value="select">--Select--</option>
                <option value="np">Nepal</option>
                <option value="us">USA</option>
                <option value="ch">China</option>
                <option value="jpn">Japan</option>
              </select>
            </div>
            <div class="col-xl-6">
              <label for="dis" class="text">District</label>
              <select name="newsletter" class="form-control background placeholdColor">
                <option value="select">--Select--</option>
                <option value="bag">Bagmati</option>
                <option value="bh">Bheri</option>
                <option value="ko">Kosi</option>
                <option value="mec">Mechi</option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-right col-xl-6">
      <div class="row ">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <p class="font-weight-bold">Shipping Method</p>
            </div>
            <div class="card-body">
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">Free Shipping - Rs. 0.00
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row no-gutters mt-3">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <p class="font-weight-bold">Payment Method</p>
            </div>
            <div class="card-body">
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">Cash On Delivery
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <p class="font-weight-bold">SHOPPING CART</p>
            </div>
            <div class="card-body" style="background-color:#00c14a">
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
                    <div class="row">
                      <div class="col-xl-5 col-lg col-md-4">
                        <img src="http://placehold.it/90x90" class="img-fluid">
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
                    <div class="row">
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
                    <div class="row">
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
        </div>
      </div>
      <div class="row no-gutters mt-3">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <p class="font-weight-bold">ADD COMMENTS ABOUT YOUR ORDER</p>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <div class="col">
                  <div class="row no-gutters mb-3">
                    <textarea name="bankDetail" id="bank" class="form-control" placeholder="Comment" cols="100"
                    rows="7"></textarea>
                  </div>
                  <div class="row no-gutters">
                    <div class="col text-center">
                      <button type="submit" class="btn btn-dangers w-50 font-weight-bold">Confirm Order</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
</div>