<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
    <div class="row justify-content-center">
    <div class="shadow bg p-3 bg-white">
      <!-- creating a form -->
      <form action="_home.php">
        <div class="row no-gutters">
          <label for="email" class="text">Email address:</label>
          <input type="email" class="form-control background placeholdColor" placeholder="example@gmail.com" id="email" required>
        </div>
        <div class="row no-gutters">
          <label for="pwd" class="text">Password:</label>
          <input type="password" class="form-control background placeholdColor" placeholder="password" id="pwd" required>
        </div>
        <button type="submit" class="btn btn-dangers mt-3">Login</button>
      </form>
    </div>
    </div>
    <hr>
    <?php include'footer_2.php'?>
  </div>
