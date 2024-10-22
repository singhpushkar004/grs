<?php
include("userdashboard.php");
$con = mysqli_connect("localhost", "root", "", "grs");
$query = "select * from tbl_complain_type";
$res = mysqli_query($con, $query);
$email = $_SESSION['user'];
$query2 = "select uid from tbl_user where email='$email'";
$res2 = mysqli_query($con, $query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .log-card{
    height:310px;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
    width:100%;
    border-radius:  1rem ;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-3 " >
                       </div>
<div class="col-sm-6 ms-2 p-4 " id="secondcard">

    <div class="log-card ">
        <h3 align="center" class="p-2">Add Complain</h6>
        <form method="post" action="usercomplaincode.php">
  <div class="row jumbotron box8 rounded p-4">
        
       
          <label for="cmptype">Select Complaint Type</label>
          <select class="form-control browser-default custom-select mt-1" name="complain" required>
            <option value="">--select complaint type--</option>
            <?php
            while ($row = mysqli_fetch_array($res)) {
            ?>
              <option value="<?php echo $row['ctid']; ?>"><?php echo $row['complain']; ?></option>
            <?php
            }
            ?>
          </select>
       
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        
          <input type="hidden" name="uid" value="<?php echo mysqli_fetch_array($res2)['uid']; ?>">
          <label for="complain" class="">Enter Your Complain</label>
          <textarea name="address" id="" cols="30" rows="3" class="form-control w-100 mt-2" required placeholder="please enter Your complain">

            </textarea>
     
        <div class="col-sm-12 form-group mb-0 p-1 ">
          <center><input type="submit" class="btn btn-primary float-right  " /></center>
        </div>
      </div>
      </div>
    </div>
  </div>
</form>
        </div>
    </div>

</div>

</body>
</html>

