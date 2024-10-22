<?php
include("userdashboard.php");

date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('H:i:s');
    if ($currentTime >= '05:00:00' && $currentTime < '12:00:00') {
        $greeting = "Good morning!";
    } elseif ($currentTime >= '12:00:00' && $currentTime < '17:00:00') {
        $greeting = "Good afternoon!";
    } else {
        $greeting = "Good evening!";
    }

$email=$_SESSION['user'];
mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $name=$row['name'];
    $uid=$row['uid'];
    $cid=$row['cid'];
    $filename=$row['profilepic'];
    
}

$query2 = "select count(status)  from tbl_complaint where uid='$uid'";
$res2 = mysqli_query($con, $query2);
if ($row2 = mysqli_fetch_array($res2)) {

    $status = $row2['0'];
} else {
    $status = 0;
}
$query3 = "select count(status)  from tbl_complaint where status='P' and uid='$uid'";
$res3 = mysqli_query($con, $query3);
if ($row3 = mysqli_fetch_array($res3)) {

    $status1 = $row3['0'];
} else {
    $status1 = 0;
}

$query6= "select count(status)  from tbl_complaint where status='C' and uid='$uid'";
$res6 = mysqli_query($con, $query6);
if ($row6 = mysqli_fetch_array($res6)) {

    $status2 = $row6['0'];
} else {
    $status2 = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashstyle.css" />
    <style>
        .log-card {
            max-height: 10rem;

            max-width: 100%;
            border-radius: 1rem;
        }

        .card {
            box-shadow: 5px 8px 18px rgb(24, 49, 172);
        }

        .log-card:hover {
            transform: scale(1.1);
            transition: transform 0.4s ease-in;

        }
        .card-text{
            font-size: 25px;
        }
        .badge{
            font-size: 20px;
        }
        .btn{
            background-color: #22d4ce;
           
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3 p-3 mt-5" id="secondcard">
                <a href="mycomplaint.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body w-100">
                                <h5 class="card-title"><button type="button" class="btn btn-primary">
                                        User's <span class="badge badge-light "><?php echo $status; ?></span>
                                    </button></h5>
                                <p class="card-text">My Complaints</p>
                                <h4 align="center"><i class="fa-sharp fa-solid fa-users" style="color: #da0b5e; font-size:35px;"></i></h4>
                                <center><button type="button" class="btn  mt-1">Check</button></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 p-3 mt-5" id="thirdcard">
                <a href="pendingcomplaint.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title"> <button type="button" class="btn btn-primary">
                                        Pending <span class="badge badge-light"><?php echo $status1; ?></span>
                                    </button></h5>
                                <p class="card-text">Pending Complaints</p>
                                <h4 align="center"><i class="fa-regular fa-clock" style="color: #c31d4f; font-size:35px;"></i></h4>
                                <center><button type="button" class="btn  mt-1">Check</button></center>
                            </div>
                        </div>



                    </div>
                </a>
            </div>
            <div class="col-sm-3 p-3 mt-5 " id="thirdcard">
                <a href="closecomplaint.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title"><button type="button" class="btn btn-primary">
                                        Closed Comp.<span class="badge badge-light"><?php echo $status2; ?></span>
                                    </button></h5>
                                <p class="card-text">Closed Complaints</p>
                                <h4 align="center"><i class="fa-solid fa-circle-exclamation" style="color: #f31260; font-size:30px;"></i></h4>
                                <center><button type="button" class="btn  mt-1">Check</button></center>
                            </div>
                        </div>



                    </div>
                </a>
            </div>
            
        </div>
       
        
    </div>
    </div>
</body>

</html>