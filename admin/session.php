<?php
include("dashboard.php");
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_session order by sid";
$res=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h3 align="center" class="p-3">Add Session</h6>
        <form action="sessioncode.php" method="post" class="p-2">
            <input type="text" name="session" class="form-control mt-4 p-3" placeholder="Add session in Ex. 2020-22 format ">
            <center><input type="submit" value="Add Session" class="btn btn-primary mt-4 btn-lg"></center>
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
        <th>Session</th>
        <th>Created By</th>
        <th>Creation Date</th>
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
        <td><?php echo $row['session']; ?></td>
        <td><?php echo "Admin"; ?></td>
        <td><?php echo $row['dor']; ?></td>
        <td><a href="sessiondelete.php?id=<?php echo $row['sid'];?>">Delete</a></td>
        <td><a href="sessionedit.php?id=<?php echo $row['sid'];?>">Edit</a></td>


    </tr>
    <?php
    $i++;
    }
    ?>
</table>
</div>
</div>
</div>
</body>
</html>

