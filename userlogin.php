<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login Form</title>
  <!-- Include Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="js/bootstrap.js"></script>
  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #fccb90;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }

    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }

    #image {
     
      opacity: 0.7;
      box-shadow: 0px 0px 10px blue;
      
   
    }

    #maindiv {
      box-shadow: 0px 0px 10px blue;
    }

    #footer {
      position: fixed;
      bottom: 0px;
    }
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
  }

    body{
      background-color: #e8e3e3;
    }
  </style>
</head>

<body>
  <div id="outer">
    <div class="container">

      <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0" id="maindiv">
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2" id="image">

                  <img src="./images/lmnun.jpg" alt="" style="height: 700px; max-width:1080px" class="p-0 w-100">

                </div>
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="./images/cms.png" style="width: 125px;" alt="logo">
                      
                    </div>

                    <form action="userlogincode.php" method="post" id="loginform">
                      <h5 align="center">User Login</h5>

                      <div class="form-outline mb-4 mt-2">
                        <label class="form-label" for="form2Example11">Enter Your Email</label>
                        <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" name="email" id="email"/>
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Exampl">Enter Your Password</label>
                        <input type="password" id="password-field" class="form-control" placeholder="Enter Your Password" name="pass" id="password">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      
                      </div>

                      <div class="d-grid gap-2 col-6 mx-auto mb-2 py-3">
                        <input type="submit" value="Login"  class="btn btn-primary">
                      </div>
                      <div class="d-flex align-items-center  justify-content-center pb-4">
                        <a class="" href="forget.php">Forgot password?</a>
                      </div>
                      <div class="d-flex align-items-center justify-content-center pb-2">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <a href="#">SignUp</a>
                      </div>
                      <div class="d-flex align-items-center  justify-content-center ">
                      <a class="" href="./index.php">Go Back</a>
                      </div>           
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="container-fluid mt-0 bg-primary text-light" id="footer">
      <footer>
        <div class="row">
          <h6 align="center">All rights reserved &copy; 2023-24 Designed & Developed by Pushkar singh</h6>
        </div>
      </footer>
    </div>
<script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
   
</body>

</html>