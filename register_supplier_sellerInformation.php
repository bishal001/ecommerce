<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  /* css for the background image of the shadow */
  .bg {
    background-image: url("images/form_background.jpg");
    background-repeat: no-repeat;
    background-color: #cccccc;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    width: 800px;
    height: auto;
  }

  .text {
    /* css for the label color */
    color: white;
  }

  .background {
    /* css for the text field */
    background-color: #49ff46;
    color: white;
    width: 70%;
    box-sizing: border-box;
    border: none;
  }

  .badge {
    font-size: 20px;
    color: white;
    background-color: #03b100;
    border: none;
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
    <h4 class="font-weight-bold text-center">Seller Registration</h4>
    <div class="d-flex flex-row justify-content-center">
      <p class="mr-1">Alredy have account</p>
      <a href="login.php" style="color:blue">Login</a>
    </div>
    <div class="row justify-content-center">
      <div class="shadow p-1 bg-white bg" style="width:70%">
        <!-- creatin a register form and setting the action-->
        <form action="">
          <!-- creating the store detail section -->
          <div class="row mb-3">
            <div class="col-xl-6">
              <label for="sname" class="text">Store Name:</label>
              <input type="text" class="form-control background" placeholder="Store Name" id="sname" required>
            </div>
            <div class="col-xl-6">
              <label for="fm" class="text">Farmer Market:</label>
              <select name="newsletter" id="fm" class="form-control background" required>
                <option value="">--Select--</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
              </select>
            </div>
          </div>
          <!-- craeating the section to store images -->
          <div class="row mb-3">
            <div class="col-xl-6">
              <!-- stores the logo of the store -->
              <div class="row no-gutters">
               <label for="sLogo" class="text">Store Logo:</label>
              </div>
              <div class="row no-gutters">
                <input type="file" id="sLogo">
              </div>
            </div>
            <!-- stores the banner of the store -->
            <div class="col-xl-6">
              <label for="sBanner" class="text">Store Banner:</label>
              <input type="file" id="sBanner">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6">
            <!-- stores the province detail -->
              <label for="Province" class="text">Province:</label>
              <select name="province" id="Province" class="form-control background" required>
                <option value="">--Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
            </div>
            <div class="col-xl-6">
            <!-- stores the district detail -->
            <label for="District" class="text">District:</label>
              <select name="District" id="District" class="form-control background" required>
                <option value="">--Select--</option>
                <option value="ilam">Ilam</option>
                <option value="dhankuta">Dhankuta</option>
                <option value="jhapa">Jhapa</option>
                <option value="sunsari">Sunsari</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-xl-6">
            <!-- stores the Palika details -->
            <label for="Palika" class="text">Palika:</label>
              <select name="Palika" id="Palika" class="form-control background" required>
                <option value="">--Select--</option>
                <option value="barah">Barah Municipality</option>
                <option value="dharan">Dharan Sub Metropolitan</option>
                <option value="duhabi">Duhabi Municipality</option>
                <option value="itahari">Itahari Sub Metropolitan</option>
              </select>
            </div>
            <div class="col-xl-6">
            <!-- stores the Ward detail -->
            <label for="Ward" class="text">Ward:</label>
              <select name="Ward" id="Ward" class="form-control background" required>
              <option value="">--Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <!-- stores the number of the store -->
            <div class="col-xl-6">
              <label for="num" class="text">Store Number:</label>
              <input type="text" class="form-control background" placeholder="Store Number" id="num">
            </div>
            <div class="col-xl-6">
            <!-- Logistics section -->
              <label for="Logistics" class="text">Logistics:</label>
              <select name="Logistics" id="Logistics" class="form-control background" required>
                <option value="">--Select--</option>
                <option value="need">I need logistic service</option>
                <option value="have">I have logistic service</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-dangers float-right">Next</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>