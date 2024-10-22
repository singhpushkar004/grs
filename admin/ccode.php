<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['user'];
include("connection.php");
$query="select password from tbl_admin where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$pp=$row['password'];
	
	
}
if($op==$pp)
{
if($op==$np)
	{
	echo "<script>alert('Your Old password and new password are same'); window.location.href='adminchange.php';</script>";
	}
  else if($np==$cnp)
{
 $query2="update tbl_admin set password='$np' where email='$email'";
mysqli_query($con,$query2);
echo "<script>alert('Your Old password change succefully'); window.location.href='adminlogin.php';</script>";	
}
else
{
echo "<script>alert('Your new password and confirm password are same'); window.location.href='adminchange.php';</script>";	
}

}
else
{
echo "<script>alert('Your Old password is same'); window.location.href='adminchange.php';</script>";
}


?>