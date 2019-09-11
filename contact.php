
  <div class="container shadow-lg bg-white">
    <?php include'nav.php'?>
    <div class="row">
      <div class="col-xl-5 col-lg-6 mb-3">
        <div class="shadow p-2">
          <div class="d-flex flex-column">
            <div>
              <p class="font-weight-bold">Name:</p> <input type="text" size="30">
            </div>
            <div class="mt-3">
              <p class="font-weight-bold">E-mail:</p> <input type="text" size="30">
            </div>
            <div class="mt-3">
              <p class="font-weight-bold">Phone No:</p> <input type="text" size="30">
            </div>
            <div class="mt-3">
              <p class="font-weight-bold">Comment:</p>
              <textarea rows="5" cols="45"></textarea><br>
              <input type="Submit" class="my-2 btn btn-dangers float-right">
            </div>
          </div>
        </div>
      </div>
      <!-- adding the google map -->
      <div class="col-xl-7 col-lg-6 text-center">
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="100%" height="400"></iframe>
        </div>
      </div>
      
    </div>

    <hr>
    <?php include'footer_2.php'?>
  </div>
