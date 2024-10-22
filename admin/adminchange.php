<?php

include("dashboard.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College | Add</title>
    <style>
        .log-card{
    height:300px;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
    width:100%;
    border-radius:  1rem ;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-3 " ></div>

<div class="col-sm-6 ms-2 p-4 " id="secondcard">
    <div class="log-card ">
        <h3 align="center" class="p-2">Change Password</h6>
        <form action="ccode.php" method="post" class="p-2">
            <input type="password" name="op" class="form-control mt-3 p-2" placeholder="Enter Your Old Password ">
            <input type="password" name="np" class="form-control mt-3 p-2" placeholder="Enter Your New Password">
            <input type="password" name="cnp" class="form-control mt-3 p-2" placeholder="Enter Your New Confirm Password ">
            <center><input type="submit" value="Change Password" class="btn btn-primary mt-1 btn-lg"></center>
        </form>
        </div>
    </div>

</div>
</body>
</html>

