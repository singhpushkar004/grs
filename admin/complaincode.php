<?php
$complain=$_POST['complain'];
$con=mysqli_connect("localhost","root","","grs");
$check="select * from tbl_complain_type where complain='$complain'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    echo "<script> alert('your details alredy exist please enter correct details');</script>";
    echo "<script>window.location.href='complain.php';</script>";
}
else{
$query="insert into tbl_complain_type(complain,status,dor) values('$complain','N',now())";
mysqli_query($con,$query);
   
    echo "<script>window.location.href='complain.php';</script>";
}

?>