<?php
include("dashboard.php");
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_complain_type order by ctid";
$res=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complain | Add</title>
    <style>
        .log-card{
    height:250px;
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
        <h3 align="center" class="p-3">Add complain</h6>
        <form action="complaincode.php" method="post" class="p-2">
            <input type="text" name="complain" class="form-control mt-4 p-3" placeholder="Enter College Name ">
            <center><input type="submit" value="Add complain" class="btn btn-primary mt-4 btn-lg"></center>
        </form>
        </div>
    </div>

</div>
<div class="row">
<div class="col-sm-3"></div>   
<div class="col-sm-8 ms-1 p-2 table-responsive" >
<table border="2px" class="table table-bordered table-hover">
    <tr>
        <th>S No.</th>
        <th>Complain</th>
        <th>Created By</th>
        <th>creattion Date</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <tr>
        <?php
        $i=1;
        while($row=mysqli_fetch_array($res))
        {
        ?>
        <td> <?php echo $i; ?></td>
        <td><?php echo $row['complain']; ?></td>
        <td><?php echo "Admin";?></td>
        <td><?php echo $row ['dor'];?></td>
        <td><a href="complaindelete.php?id=<?php echo $row['ctid'];?>">Delete</a></td>
        <td><a href="complainedit.php?id=<?php echo $row['ctid'];?>">Edit</a></td>
    </tr>
    <?php
    $i++;
        }
    ?>
</table>
</div>
</div>
   


</body>
</html>

