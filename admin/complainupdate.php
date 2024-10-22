<?php
$complain=$_POST['complain'];
$id=$_POST['id'];
$con=mysqli_connect("localhost","root","","grs");
$query="update tbl_complain_type set complain='$complain' where ctid='$id'";
mysqli_query($con,$query);
header("location:complain.php");

?>