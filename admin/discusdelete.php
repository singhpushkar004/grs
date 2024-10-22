<?php
$qid=$_REQUEST['qid'];
include("connection.php");
$query="delete from tbl_answer where qid='$qid'";
mysqli_query($con,$query);
$query2="delete from tbl_question where qid='$qid'";
mysqli_query($con,$query2);
echo "<script>confirm('Are You sure delete this question'); window.location.href='discus.php';</script>";

?>