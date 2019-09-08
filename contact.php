<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .vl{
      border-left: 3px solid gray;
      height: 500px
    }
    body{
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
  <hr>
  <?php include'footer_2.php'?>
  </div>
  
</body>

</html>