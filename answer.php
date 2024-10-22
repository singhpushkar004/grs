<?php
session_start();
$ans=$_POST['ans'];
$qid=$_POST['qid'];
$email=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $uid = $row['uid'];
}
$query2="insert into tbl_answer(id,qid,answer,date) value('$uid','$qid','$ans',curdate())";
mysqli_query($con,$query2);
echo "<script>alert('Your Answer Posted Successfully'); window.location.href='discus.php';</script>";
?>