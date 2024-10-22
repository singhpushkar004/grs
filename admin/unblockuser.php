<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_user where uid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $status=$row['status'];
}
if($status=='Y')
{
$query2="update tbl_user set status='N' where uid='$id'";
mysqli_query($con,$query2);
echo "<script>confirm('Are Your Sure Block This user'); window.location.href='blockshowuser.php';</script>";
}

?>