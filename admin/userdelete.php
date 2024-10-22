<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete  from tbl_user where uid='$id'";
mysqli_query($con,$query);
header("location:usermanege.php");

?>