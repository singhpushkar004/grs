<?php
include("userdashboard.php");
$email=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
$uid= $row['uid'];
$filename=$row['profilepic'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplaode Profile</title>
    <style>
        .log-card{
    height:520px;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
   max-width: 80rem;
    border-radius:  1rem ;
    }
    input{
        border: none;
    }
    #card{
    height:170px;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
    width:10%;
    border-radius:50% ;
    
    }
    #log-card{
    height:42rem;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
    max-width:90%;
    }
    #image{
        border-radius:50%;
        width:200px;
        height:140px;
        box-shadow: 0px 0px 2px black;
      }
    </style>
</head>
<body>
    <div class="container-flued">
     
        
        <div class="col-sm-3"></div>
        
        <div class="row">
        <div class="col-sm-3 " ></div>

<div class="col-sm-8 ms-2 p-1 mt-0 " id="secondcard">
    
        
        <?php
        $query2="select * from tbl_user where uid='$uid'";
        $res2=mysqli_query($con,$query2);
    while($row2=mysqli_fetch_array($res2))
    {
        ?>
        <div class="container mt-1">
        <div class="log-card mt-3" id="log-card">
<form method="post" action="profileupdate.php" class="p-3 w-100"> 
    <div class="row jumbotron box8 rounded">

    <h3 align="center" class="p-1 w-100" ><img src="student/<?php echo $filename; ?>" id="image"/></h3>
    <h3 align="center" class=""><a href="pic.php"><button type="button" class="btn btn-primary btn-md">Upload Picture</button></a></h3>

      <div class="row">
        <div class="col-sm-6 form-group">
          <label for="name-f"> Name</label>
          <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your  name."  value="<?php echo $row2['name'] ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Father's name</label>
          <input type="text" class="form-control" name="fname" id="name-l" placeholder="Enter your Father name."  value="<?php echo $row2['fname']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Gender</label>
          <input type="text" class="form-control"  name="gender"  id="name-l" placeholder="Enter your Father name."  value="<?php echo $row2['gender']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Email</label>
          <input type="text" class="form-control"  name="email" readonly id="name-l" placeholder="Enter your Father name."  value="<?php echo $row2['email']; ?>">
        
        </div>
        
        <div class="col-sm-6 form-group">
          <label for="name-l">Date of Birth</label>
          <input type="text" class="form-control"  name="dob"  id="name-l" placeholder="Enter your Date of birth"  value="<?php echo $row2['dob']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Mobile Number</label>
          <input type="text" class="form-control"  id="name-l" name="mobile" placeholder="Enter your mobile number"  value="<?php echo $row2['mobile']; ?>">
        </div>

        <div class="col-sm-6 form-group">
          <label for="name-l">Address</label>
          <input type="text" class="form-control"  id="name-l" name="address" placeholder="Enter your address"  value="<?php echo $row2['address']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">City</label>
          <input type="text" class="form-control"  id="name-l" name="city" placeholder="Enter your city"  value="<?php echo $row2['city']; ?>">
        
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Pincode</label>
          <input type="text" class="form-control"  id="name-l" name="pincode" placeholder="Enter your pincode"  value="<?php echo $row2['pincode']; ?>">
          
        </div>
        
        <div class="col-sm-6 form-group">
          <label for="name-l">Course</label>
          <input type="text" class="form-control"  id="name-l" disabled   value="<?php echo $row2['course']; ?>">
        </div>
        
        <div class="col-sm-6 form-group">
            
        <?php $cid=$row2['cid'];
        $query3="select * from tbl_college where cid='$cid'";
        $res3=mysqli_query($con,$query3);
        if($row3=mysqli_fetch_array($res3))
        {
          $collegename=$row3['college'];
          
        }
        
        ?>
            <label for="">College Name:</label>
          <input type="text" class="form-control"  id="name-l" disabled placeholder="Enter your Father name."  value="<?php echo $collegename;?>">
         
          
        </div>
        <?php
    $sid=$row2['sid'];
    $query4="select * from tbl_session where sid='$sid'";
    $res4=mysqli_query($con,$query4);
    if($row4=mysqli_fetch_array($res4))
    {
        $session=$row4['session'];
    }
        ?>
        <div class="col-sm-6 form-group">
          <label for="name-l">Session</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $session; ?>">
        </div>
        <div class="col-sm-12 form-group mb-0 p-3 ">
          <center><button type="submit" class="btn btn-primary btn-lg">Update</button></center>
        </div>
       

      </div>
  </form>
        </div>
</div>
</div>
        <?php
    }
?>  
        </div>
    </div>

</div>



</body>
</html>
