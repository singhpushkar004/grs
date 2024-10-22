<?php
include("userdashboard.php");
$email=$_SESSION['user'];
//echo $email;

$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
$uid= $row['uid'];


}



?>
<div class="contaner">
        <div class="row">
        <div class="col-sm-2 p-5 ms-4" ></div>
        <div class="col-sm-9 px-0 py-5 me-1" id="secondcard">
            <h3 align="center" class="text-primary mb-3">My Complaint</h3>
            <div class="table-responsive">
<table  class="table table-bordered w-100 table-hover ">
    <tr>
        <th>S No.</th>
        <th>Complaint</th>
        <th>Complain Type</th>
        <th>Date Of Complaint</th>
        <th>Status</th>

    </tr>
  <?php
$query2="select * from tbl_complaint where uid='$uid' and status='C'";
$res2=mysqli_query($con,$query2);
$id=1;
while($row2=mysqli_fetch_array($res2))
{
    $ctid=$row2['ctid'];
?>
    
    <tr>
    <td><?php echo $id; ?></td>
    <td><b><?php echo $row2['complain'];?></b></td>
      
    
  
   <?php 
        $query3="select * from tbl_complain_type where ctid='$ctid'";
        $res3=mysqli_query($con,$query3);
        while($row3=mysqli_fetch_array($res3))
        {
         
        
        
        ?>
    <td><b><?php echo $row3['complain']?></b></td>

    <?php
        }
    ?>
    <td><?php echo $row2['doc'];?></td>
   <td><?php echo $row2['status'];?></td>
   
    </tr>
    <?php
   $id++;
}
   ?>
    </table>
    
            </div>
        </div>
        </div>
    </div>
