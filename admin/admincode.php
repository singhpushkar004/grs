<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_admin where email='$email'and password='$pass'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $_SESSION['user']=$email;
    echo "<script>alert('You are login succecfully'); window.location.href='dash2.php';</script>";
}
else{
    echo "<script>alert('Your username or password is incorrect'); window.location.href='adminlogin.php';</script>";

}


?>