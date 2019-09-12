<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
  <div class="row shadow-sm justify-content-center mb-3" style="background-color: #1a8a64; color:white">
    <p class="mt-2 font-weight-bold">GOT A QUESTION OR INQUIRY?</p>
  </div>
  <!-- this div contains the map section -->
  <div class="row map-responsive mb-3">
    <iframe
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
      class="w-100" height="490" style="border:none;"></iframe>
  </div>
  <!-- this div contains the contact form -->
  <div class="row justify-content-center">
    <div class="shadow p-1 bg" style="width:70%">
      <!-- creatin a register form and setting the action-->
      <form action="register_supplier_sellerInformation.php">
        <!-- creating the personial detail section -->
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
            <input type="email" class="form-control background placeholdColor" placeholder="E-mail" id="email" required>
          </div>
          <div class="col-xl-6 col-md-6">
            <label for="number" class="text">Mobile Number</label>
            <input type="text" class="form-control background placeholdColor" placeholder="Mobile Number" id="number"
              >
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="email" class="text">Comment</label>
            <textarea name="bankDetail" id="bank" class="form-control background placeholdColor" placeholder="Comment"
                cols="100" rows="7"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-dangers float-right font-weight-bold">Submit<i
            class="fa fa-arrow-right ml-1"></i></button>
      </form>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
</div>