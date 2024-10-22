<?php
session_start();
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['user'];
//echo $email;
$con=mysqli_connect("localhost","root","","grs");
$query="select*from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $uid=$row['uid'];
}
$query2="insert into tbl_question(id,question,date) values('$uid','$ques',curdate())";
mysqli_query($con,$query2);
echo "<script>alert('Your Question added successfully'); window.location.href='discus.php';</script>"
?>