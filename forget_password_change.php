<?php
if(isset($_POST['code']))
{
    $con=new mysqli("localhost","root","","grs");
    $code=$_POST['code'];

    if($con->connect_error)
    {
        die("could not connect to the database");
    }
    $verifyquery=$con->query("select * from tbl_user where code ='$code'");
    if($verifyquery->num_rows==0)
    {
        header("location:index.html");
    }
    if(isset($_POST['change']))
    {
        $email=$_POST['email'];
        $new_password=$_POST['new_password'];
        $changequery=$con->query("update tbl_user set password='$new_password' where email='$email'");
    }
    if($changequery)
    {
        echo "your code change succesfully";
    }
    $con->close();
}
else{
    header("location:index.html");
    exit();
}

?>