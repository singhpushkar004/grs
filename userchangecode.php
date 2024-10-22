<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['user'];
//echo $email;
include("admin/connection.php");
$query="select password from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pp=$row['password'];

}
if($op==$pp)
{
    if($op==$np)
    {
        echo "<script>alert('Your Old password and New password are same'); window.location.href='userchange.php';</script>";
    }
    else if($np==$cnp)
    {
        $query2="update tbl_user set password='$np' where email='$email'";
        mysqli_query($con,$query2);
        echo "<script>alert('Your Password Changed succesfully'); window.location.href='userlogin.php';</script>";
    }
    else
    {
        echo "<script>alert('Your New password and Confirm New password are same'); window.location.href='userchange.php';</script>";
    }
}
else
{
    echo "<script>alert('Please Enter Your Correct old password'); window.location.href='userchange.php';</script>";
}

?>