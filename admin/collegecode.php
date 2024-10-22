<?php
$con=mysqli_connect("localhost","root","","grs");
$college=$_POST['college'];
$query="insert into tbl_college(college,status,dor) values('$college','N',now())";
mysqli_query($con,$query);
header("location:college.php");
?>