<?php
$con=mysqli_connect("localhost","root","","grs");
$id=$_REQUEST['id'];
//echo "$id";
$query="delete from tbl_complain_type where ctid=$id";
mysqli_query($con,$query);
header("location:complain.php");
?>