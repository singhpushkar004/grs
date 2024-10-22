<?php
$con=mysqli_connect("localhost","root","","grs");
$id=$_REQUEST['id'];
//echo "$id";
$query="delete from tbl_college where cid=$id";
mysqli_query($con,$query);
header("location:college.php");



?>