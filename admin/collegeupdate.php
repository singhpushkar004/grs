<?php
$college=$_POST['college'];
$id=$_POST['id'];
$con=mysqli_connect("localhost","root","","grs");
$query="update tbl_college set college='$college' where cid='$id'";
mysqli_query($con,$query);
header("location:college.php");

?>