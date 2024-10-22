<?php
$con=mysqli_connect("localhost","root","","grs");
$id=$_REQUEST['id'];
//echo "$id";
$query="delete from tbl_session where sid=$id";
mysqli_query($con,$query);
header("location:session.php");



?>