<?php
include("dashboard.php");
include("connection.php");
$query="select * from tbl_complaint where status='C'";
$res=mysqli_query($con,$query);

?>
<div class="contaner">
        <div class="row">
        <div class="col-sm-2 p-5 ms-4" ></div>
        <div class="col-sm-9 px-0 py-5 me-1" id="secondcard">
            <h3 align="center" class="text-primary mb-3">Closed Complaint</h3>
            <div class="table-responsive">
<table  class="table table-bordered w-auto table-hover ">
    <tr>
        <th>S No.</th>
        <th>Complain Type</th>
        <th>Student Name</th>
        <th>Complain</th>
        <th>Status of Complain</th>
        <th>Date of Complain</th>
        <th>Date of Completion</th>
       
        
        
    </tr>
    <?php
    $i=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <?php $cid=$row['ctid'];
        $query2="select * from tbl_complain_type where ctid='$cid'";
        $res2=mysqli_query($con,$query2);
        if($row2=mysqli_fetch_array($res2))
        {
          $complain=$row2['complain'];
        }
        
        ?>
    <td><b><?php echo strtoupper($complain);?></b></td>
    <?php $uid=$row['uid'];
        $query3="select * from tbl_user where uid='$uid'";
        $res3=mysqli_query($con,$query3);
        if($row3=mysqli_fetch_array($res3))
        {
          $name=$row3['name'];
        }
        
        ?>
    <td><b><?php echo $name; ?></b></td>
    <td><?php echo $row['complain']; ?></td>
    
    <td><?php echo $row['status'] ?>losed</td>
    <td><?php echo $row['doc']; ?></td>
    <td><?php echo $row['docomplition']; ?></td>
    
            
      
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