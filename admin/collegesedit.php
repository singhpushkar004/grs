<?php
include("dashboard.php");
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_college where cid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
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
        <form action="collegeupdate.php" method="post" class="p-2">
        <input type="hidden" name="id" value="<?php echo $row['cid']; ?>">
            <input type="text" name="college" class="form-control mt-4 p-3" value="<?php echo $row['college'];?>">
    <center><input type= "submit" value="Update" class="btn btn-primary mt-4 btn-lg"/></center>
        </form>
        </div>
    </div>

</div>

<?php
}
?>

</body>
</html>

