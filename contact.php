<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
  <div class="row">
    <div class="col-xl-5 col-lg-6 mb-3">
      <div class="shadow" style="background-color: #58d486">
        <div class="d-flex flex-column ml-2">
          <div>
            <p class="font-weight-bold text">Name:</p> <input type="text" size="30">
          </div>
          <div class="mt-3">
            <p class="font-weight-bold text">E-mail:</p> <input type="text" size="30">
          </div>
          <div class="mt-3">
            <p class="font-weight-bold text">Phone Number:</p> <input type="text" size="30">
          </div>
          <div class="mt-3">
            <p class="font-weight-bold text">Comment:</p>
            <textarea rows="5" cols="50"></textarea><br>
            <input type="Submit" class="my-2 btn btn-dangers">
          </div>
        </div>
      </div>
    </div>
    <!-- adding the google map -->
    <div class="col-xl-7 col-lg-6 text-center">
      <div class="map-responsive">
        <iframe
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
          width="100%" height="490" style="border:none;"></iframe>
      </div>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
</div>