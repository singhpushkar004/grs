<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Include Bootstrap CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <script src="../js/bootstrap.js"></script>
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
    /* styles.css */
#image{
    position: relative;
    display: inline-block;
}

.image-text {
    position: absolute;
    top: 10%; /* Adjust to position the text vertically */
    left: 30%; /* Adjust to position the text horizontally */
    transform: translate(-20%, -20%);
   /* Optional: Add a background color with transparency */
    padding: 20px; /* Optional: Add padding to the text */
    text-decoration: solid;
}

  </style>
</head>

<body>
  <div id="outer">
    <div class="container">

      <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded text-black">
              <div class="row g-0 " id="maindiv">
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2" id="image">

                  <img src="../images/lmnun.jpg" alt="" style="height: 717px; max-width:1080px" class="p-0 w-100">
                <div class="image-text text-center">
                    
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="../images/cms.png" style="width: 125px;" alt="logo">
                      <h3 class="mt-1 mb-2 pb-1 text-primary">Lalit Narayan Mithila University Darbhanga Bihar</h3>
                    </div>

                    <form action="admincode.php" method="post">
                      <h4 align="center">Admin Login </h4>

                      <div class="form-outline mb-4 mt-2">
                        <label class="form-label" for="form2Example11"> Email:</label>
                        <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" name="email" />
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22"> Password:</label>
                        <input type="password" id="form2Example22" class="form-control" placeholder="Enter Your Password" name="pass"/>
                      </div>

                      <div class="d-grid gap-2 col-6 mx-auto mb-2 py-5">
                        <input type="submit" value="Login"  class="btn btn-primary">
                      </div>
                      
                      <div class="d-flex align-items-center  justify-content-center pb-4">
                      <a class="" href="../index.php">Go Back</a>
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
    <div class="container-fluid mt-0 bg-primary" id="footer">
      <footer>
        <div class="row text-light">
          <h6 align="center">All rights reserved &copy; 2023-24 Designed & Developed by Pushkar singh</h6>
        </div>
      </footer>
    </div>


</body>

</html>