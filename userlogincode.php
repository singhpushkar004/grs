<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user where email='$email' and password='$pass' and status='N'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $_SESSION['user']=$email;
    header("location:userdash2.php");
}
else{
    echo "<script>confirm('You are Not Registered Or Blocked'); window.location.href='userlogin.php';</script>";
}
?>