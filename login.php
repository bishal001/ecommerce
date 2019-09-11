<div class="container shadow-lg bg-white">
  <?php include'nav.php'?>
  <div class="row justify-content-center">
    <div class="shadow bg p-3 bg-white">
      <!-- creating a form -->
      <form action="_home.php">
        <div class="row no-gutters">
          <label for="email" class="text">Email address:</label>
          <input type="email" class="form-control background placeholdColor" placeholder="example@gmail.com" id="email"
            required>
        </div>
        <div class="row no-gutters">
          <label for="pwd" class="text">Password:</label>
          <input type="password" class="form-control background placeholdColor" placeholder="password" id="pwd"
            required>
        </div>
        <div class="d-flex flex-row justify-content-center mb-3">
          <button type="submit" class="btn btn-dangers mt-3 font-weight-bold" style="width:200px">Login <i class="fa fa-unlock-alt ml-1"></i> </button>
        </div>
        <p class="font-weight-bold text-center"><a href="#" style="color:white">Forget Password</a></p>
        <p class="font-weight-bold text-center" style="color:white">Dont have an account?<a href="signup.php" style="color:white" class="" > Signup</a></p>
      </form>
    </div>
  </div>
  <hr>
  <?php include'footer_2.php'?>
</div>