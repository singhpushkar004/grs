<?php
include("dashboard.php");
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_college order by cid";
$res=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College | Add</title>
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
        <div class="col-sm-3 " ></div>

<div class="col-sm-6 ms-2 p-4 " id="secondcard">
    <div class="log-card ">
        <h3 align="center" class="p-3">Add College</h6>
        <form action="collegecode.php" method="post" class="p-2">
            <input type="text" name="college" class="form-control mt-4 p-3" placeholder="Enter College Name ">
            <center><input type="submit" value="Add College" class="btn btn-primary mt-4 btn-lg"></center>
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
        <th>College</th>
        <th>Created By</th>
        <th>creattion Date</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
    $i=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['college']; ?></td>
        <td><?php echo "Admin"; ?></td>
        <td><?php echo $row['dor']; ?></td>
        <td><a href="collegesdeletecode.php?id=<?php echo $row['cid'];?>">Delete</a></td>
        <td><a href="collegesedit.php?id=<?php echo $row['cid'];?>">Edit</a></td>
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

