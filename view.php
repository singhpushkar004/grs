<?php
$id=$_REQUEST['qid'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_answer where qid='$id'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
   echo $row['answer'];
   echo "<br/>";
}

?>