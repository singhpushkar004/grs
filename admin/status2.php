<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_complaint where cmpid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $status=$row['status'];
}
if($status=='P')
{
$query2="update tbl_complaint set status='C',docomplition=curdate() where cmpid='$id'";
mysqli_query($con,$query2);
echo "<script>alert('Status Changed succecfully'); window.location.href='pc.php';</script>";
}

?>