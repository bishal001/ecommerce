<!DOCTYPE html>
<html lang="en">

<head>
  <?php include'nav.php'?>
  <style>
    .vl{
      border-left: 3px solid gray;
      height: 500px
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
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
						<textarea rows="5" cols="50"></textarea><br>
						<input type="Submit" class= "my-2 btn btn-dangers float-right">
					</div>
          </div>
        </div>  
      </div>

      <div class="col"></div>
    </div>  
  </div>
  <hr>
  <?php include'footer.php'?>
  
</body>

</html>