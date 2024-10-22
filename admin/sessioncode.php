<?php
$con=mysqli_connect("localhost","root","","grs");
$session=$_POST['session'];
$query="insert into tbl_session(session,status,dor) values('$session','N',now())";
mysqli_query($con,$query);
header("location:session.php");
?>