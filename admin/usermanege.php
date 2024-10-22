<?php
include("dashboard.php");
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user  where status='N'";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        td a{
            text-decoration: none;
        }
    </style>
    
</head>
<body>
    <div class="contaner">
        <div class="row">
        <div class="col-sm-2 p-5 ms-4" ></div>
        <div class="col-sm-9 px-0 py-5 me-1" id="secondcard">
            <div class="table-responsive">
<table id="myTable"  class="table table-bordered w-auto table-hover text-dark">
    <tr>
        <th>S No.</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>DOB</th>
        <th>City</th>
        <th>College</th>
        <th>Date of Registration</th>
        <th>View More</th>
        <th>Block User</th>
        <th>Delete</th>
    </tr>
    <?php
    $i=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo strtoupper($row['name']);?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    <td><?php echo $row['city']; ?></td>
    <?php  $cid=$row['cid'];
    $query3="select * from tbl_college where cid='$cid'";
    $res3=mysqli_query($con,$query3);
        if($row3=mysqli_fetch_array($res3))
        {
            $college=$row3['college'];
            
        }
    ?>
    <td>
        <?php echo $college ?>
    </td>
        
    <?php  $sid=$row['sid'];
    $query2="select * from tbl_session where sid='$sid'";
    $res2=mysqli_query($con,$query2);
        if($row2=mysqli_fetch_array($res2))
        {
            $session=$row2['session'];
        }
    ?>
    <td><?php echo $session ?></td>
    
   
   
    
    
    <td><a href="userview.php?id=<?php echo $row['uid']; ?>">View Details</a></td>
    <td><a href="blockuser.php?id=<?php echo $row['uid'];?>">Block User</a></td>
    <td><a href="userdelete.php?id=<?php echo $row['uid']; ?>" ><i class="fa-sharp fa-solid fa-trash" style="font-size: 50px;"></i></a></td>
    </tr>
    <?php
    $i++;
    }
    ?>

    </table>
    
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>
