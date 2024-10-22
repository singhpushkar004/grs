<?php
$session=$_POST['session'];
$id=$_POST['id'];
$con=mysqli_connect("localhost","root","","grs");
$query="update tbl_session set session='$session' where sid='$id'";
mysqli_query($con,$query);
header("location:session.php");

?>