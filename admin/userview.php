<?php
include("dashboard.php");
$id=$_REQUEST['id'];
include("connection.php");
$query="select * from tbl_user where uid='$id'";
$res=mysqli_query($con,$query);
$email=$_SESSION['user'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College | Add</title>
    <style>
        .log-card{
    height:500px;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
    width:100%;
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
    width:90%;
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
    
    while($row=mysqli_fetch_array($res))
    {
      $filename=$row['profilepic'];
        ?>
        <div class="container mt-1">
        <div class="log-card" id="log-card">
<form method="post" action="" class="p-3"> 
    <div class="row jumbotron box8 rounded">
    <h3 align="center" class="p-1 w-100" ><img src="../student/<?php echo $filename; ?>" id="image"/></h3>
    <h3 align="center" class=""><a href="pic.php"><button type="button" class="btn btn-primary btn-md">Upload Picture</button></a></h3>

      
      <div class="row">
        <div class="col-sm-6 form-group">
          <label for="name-f"> Name</label>
          <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your  name." disabled value="<?php echo $row['name'] ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Father's name</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['fname']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Gender</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['gender']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Email</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['email']; ?>">
        
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Password</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="********"">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Date of Birth</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['dob']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Mobile Number</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['mobile']; ?>">
        </div>

        <div class="col-sm-6 form-group">
          <label for="name-l">Address</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['address']; ?>">
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">City</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['city']; ?>">
        
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-l">Pincode</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['pincode']; ?>">
          
        </div>
        
        <div class="col-sm-6 form-group">
          <label for="name-l">Course</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $row['course']; ?>">
        </div>
        <div class="col-sm-6 form-group">
            
        <?php $cid=$row['cid'];
        $query2="select * from tbl_college where cid='$cid'";
        $res2=mysqli_query($con,$query2);
        if($row2=mysqli_fetch_array($res2))
        {
          $collegename=$row2['college'];
        }
        
        ?>
            <label for="">College Name:</label>
          <input type="text" class="form-control"  id="name-l" placeholder="Enter your Father name." disabled value="<?php echo $collegename;?>">
         
          
        </div>
       
        <div class="col-sm-12 form-group mb-0 p-3 ">
          <a href="usermanege.php"><center><button type="button" class="btn btn-primary btn-lg">Close</button></center></a>
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
