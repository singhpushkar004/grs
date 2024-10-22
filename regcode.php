<?php
$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$session=$_POST['session'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$course=$_POST['course'];
$college=$_POST['college'];

$con=mysqli_connect("localhost","root","","grs");
$check="select * from tbl_user where email='$email' or mobile='$mobile'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    echo "<script> alert('your details alredy exist please enter correct details');</script>";
    echo "<script>window.location.href='registration.php';</script>";   
}
else{
$query="insert into tbl_user(name,fname,gender,email,password,mobile,dob,address,city,pincode,course,sid,cid,status,dor) values('$name','$fname','$gender','$email','$pass','$mobile','$dob','$address','$city','$pincode','$course','$session','$college','N',now())";
mysqli_query($con,$query);
   echo "<script> alert('your Registration is successfull please login');</script>";
    echo "<script>window.location.href='userlogin.php';</script>";
}

?>