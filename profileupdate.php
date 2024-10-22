<?php
session_start();
$con=mysqli_connect("localhost","root","","grs");
$email=$_SESSION['user'];
//echo $email;

$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
$uid= $row['uid'];


}
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$query2="update tbl_user set name='$name',fname='$fname',gender='$gender',dob='$dob',mobile='$mobile',address='$address',city='$city',pincode='$pincode' where uid='$uid' ";
mysqli_query($con,$query2);
echo "<script>alert('You are profile update succecfully'); window.location.href='userdashboard.php';</script>";
?>