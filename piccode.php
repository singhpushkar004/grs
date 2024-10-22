<?php
session_start();
$email=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","grs");
$query2="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query2);
if($row=mysqli_fetch_array($res))
{
$uid=$row['uid'];
}
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="student/";
$query="update tbl_user set profilepic='$filename' where uid='$uid'";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$filename);
echo "profile uplaoded succesfully";
?>