<?php
$con = mysqli_connect("localhost", "root", "", "grs");
$query = "select * from tbl_session";
$res = mysqli_query($con, $query);
$college = "select * from tbl_college order by cid";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Include Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="js/bootstrap.js"></script>
  <style>
    label {
      font-weight: 600;
      color: #666;
    }

    body {
      background: #f1f1f1;
    }

    .box8 {
      box-shadow: 0px 0px 5px 1px blue;
    }

    .mx-t3 {
      margin-top: -3rem;
    }

    #footer {
      position: fixed;
      bottom: 0px;
    }
    .error {color: #FF0000;}
  </style>

</head>

<body>
  
  
  <div id="outer">
    <div class="container mt-1">

    <form method="post" action="regcode.php"> 
        <div class="row jumbotron box8 rounded">

          <div id="outer" class="container-fluid mt-3">
            <h1 align="center"><img src="images/cms.png" style="max-height: 120px;" /></h1>
            <h3 class="text-center text-primary">Lalit Narayan Mithila University Darbhanga Bihar</h3>
            <h4 align="center">User Ragistration Form</h4>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label for="name-f">First Name</label>
              <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your  name." required>
            </div>
            <div class="col-sm-6 form-group">
              <label for="name-l">Father's name</label>
              <input type="text" class="form-control" name="fname" id="name-l" placeholder="Enter your Father name."  required>
            </div>
            <div class="col-sm-6 form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required >
            </div>
            <div class="col-sm-6 form-group">
              <label for="sex">Gender</label>
              <select id="sex" class="form-control browser-default custom-select" name="gender"  required>
              <option value="">--select one--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unspesified">Unspecified</option>
              </select>
            
            </div>
            <div class="col-sm-6 form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="pass" id="email" placeholder="Enter your Password." required>
              
            </div>
            <div class="col-sm-6 form-group">
              <label for="address">Address:</label>
              <textarea name="address" id="" cols="30" rows="1" class="form-control"  required></textarea>
              
            </div>
            <div class="col-sm-6 form-group">
              <label for="Mobile Number">Mobile Number</label>
              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile Number."  maxlength="10"  required>
             
            </div>

            <div class="col-sm-6 form-group">
              <label for="Date">Date Of Birth</label>
              <input type="Date" name="dob" class="form-control" id="Date" placeholder=""  required>
             
            </div>
            <div class="col-sm-6 form-group">
              <label for="session">Select Session</label>
              <select class="form-control browser-default custom-select" name="session"  required>
                <option value="">--select session--</option>
                <?php
                while ($row = mysqli_fetch_array($res)) {
                ?>
                  <option value="<?php echo $row['sid']; ?>"><?php echo $row['session']; ?></option>
                <?php
                }
                ?>
              </select>
            
            </div>
            <div class="col-sm-6 form-group">
              <label for="city">City</label>
              <select class="form-control browser-default custom-select" name="city">
                <option selected>--select city--</option>
                <option>Darbhanga</option>
                <option>Muzaffarpur</option>
                <option>Samastipur</option>
                <option>Madhubani</option>
              </select>
              
            </div>
            <div class="col-sm-6 form-group">
              <label for="Pincode">Pincode</label>
              <input type="text" name="pincode" class="form-control" placeholder="Enter your Pincode."  maxlength="6" required>
             
            </div>
            <div class="col-sm-6 form-group">
              <label for="course">Select Course</label>
              <select class="form-control browser-default custom-select" name="course">
                <option value="">--select course--</option>
                <option>B.Sc</option>
                <option>B.A</option>
                <option>B.Com</option>
                <option>M.Sc</option>
                <option>M.A</option>
                <option>M.Com</option>
                <option>M.B.A</option>
                <option>PHD</option>
              </select>
              
            </div>
            <div class="col-sm-6 form-group">
              <label for="college">college</label>
              <select class="form-control browser-default custom-select" name="college"  required>
                <option>--select college--</option>
                <?php
                $sqli = mysqli_query($con, $college);
                while ($col = mysqli_fetch_array($sqli)) {
                ?>
                  <option value="<?php echo $col['cid']; ?>"><?php echo $col['college']; ?> </option>

                <?php
                }
                ?>
              </select>
              
            </div>
           
            <div class="col-sm-12 form-group mb-0 p-3 ">
              <center><input type="submit" class="btn btn-primary float-right  " /></center>
            </div>
            <div class="  mb-4 p-3  ">
              <center>
                <h5>If You have an account please?<a href="userlogin.php">SignIn</a></h5>
              </center>
            </div>

          </div>
      </form>
    </div>
  </div>
  <div class="container-fluid bg-primary mt-2 p-0" id="footer">
    <footer>
      <div class="row text-light ">
        <h6 align="center">All rights reserved &copy; 2023-24 Designed & Developed by Pushkar singh</h6>
      </div>
    </footer>
  </div>


</body>

</html>