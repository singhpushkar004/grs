<?php
$compt=$_POST['complain'];
$complain=$_POST['address'];
$uid=$_POST['uid'];
$con=mysqli_connect("localhost","root","","grs");
$query="insert into tbl_complaint(ctid,uid,complain,doc,status,docomplition) values('$compt','$uid','$complain',curdate(),'N',curdate())";
mysqli_query($con,$query);
echo "<script> alert('your complaint submitted successfull ');</script>";
    echo "<script>window.location.href='addcomplain.php';</script>";
?>