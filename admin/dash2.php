<?php
include("dashboard.php");


include("connection.php");
$query = "select count(*)  from tbl_user";
$res = mysqli_query($con, $query);
if ($row = mysqli_fetch_array($res)) {

    $userCount = $row['0'];
} else {
    $status = 0;
}
$query2 = "select count(status)  from tbl_complaint where status='N'";
$res2 = mysqli_query($con, $query2);
if ($row2 = mysqli_fetch_array($res2)) {

    $status = $row2['0'];
} else {
    $status = 0;
}
$query3 = "select count(status)  from tbl_complaint where status='P'";
$res3 = mysqli_query($con, $query3);
if ($row3 = mysqli_fetch_array($res3)) {

    $status1 = $row3['0'];
} else {
    $status1 = 0;
}
$query4 = "select count(college) from tbl_college";
$res4 = mysqli_query($con, $query4);
if ($row4 = mysqli_fetch_array($res4)) {
    $college = $row4['0'];
} else {
    $college = 0;
}
$query5 = "select count(complain) from tbl_complaint";
$res5 = mysqli_query($con, $query5);
if ($row5 = mysqli_fetch_array($res5)) {
    $complaint = $row5['0'];
} else {
    $complaint = 0;
}
$query6= "select count(status)  from tbl_complaint where status='Y'";
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
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3 p-3 mt-5" id="secondcard">
                <a href="usermanege.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body w-100">
                                <h5 class="card-title"><button type="button" class="btn btn-primary">
                                        User's <span class="badge badge-light"><?php echo $userCount; ?></span>
                                    </button></h5>
                                <p class="card-text">Total User No.</p>
                                <h4 align="center"><i class="fa-sharp fa-solid fa-users" style="color: #da0b5e; font-size:35px;"></i></h4>
                                <center><button type="button" class="btn btn-primary mt-1">Check</button></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 p-3 mt-5 " id="thirdcard">
                <a href="notprocessyet.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title"><button type="button" class="btn btn-primary">
                                        N.P.Complaint<span class="badge badge-light"><?php echo $status; ?></span>
                                    </button></h5>
                                <p class="card-text">Not Processed Complaint</p>
                                <h4 align="center"><i class="fa-solid fa-circle-exclamation" style="color: #f31260; font-size:30px;"></i></h4>
                                <center><button type="button" class="btn btn-primary mt-1">Check</button></center>
                            </div>
                        </div>



                    </div>
                </a>
            </div>
            <div class="col-sm-3 p-3 mt-5" id="thirdcard">
                <a href="pc.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title"> <button type="button" class="btn btn-primary">
                                        Pending <span class="badge badge-light"><?php echo $status1; ?></span>
                                    </button></h5>
                                <p class="card-text">Pending Comlaints</p>
                                <h4 align="center"><i class="fa-regular fa-clock" style="color: #c31d4f; font-size:35px;"></i></h4>
                                <center><button type="button" class="btn btn-primary mt-1">Check</button></center>
                            </div>
                        </div>



                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>

            <div class="col-sm-6 p-3 mt-5" id="secondcard">
                <a href="college.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="card-title"> <button type="button" class="btn    btn-primary">
                                                Colleges <span class="badge badge-light"><?php echo  $college; ?></span>
                                            </button></h5>
                                        <p class="card-text">Total Colleges</p>

                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class=""><img src="../images/collegeicon.png" alt="" style="max-height:80px;"></h4>

                                        <button type="button" class="btn btn-primary mt-5">Check</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </a>
            </div>

            <div class="col-sm-3 p-3  mt-5 " id="secondcard">
                <a href="blockshowuser.php" style=" text-decoration:none;">
                    <div class="log-card rounded w-100 ">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                <h5 class="card-title"><button type="button" class="btn btn-primary">
                                        Blocked <span class="badge badge-light"><?php echo $status2; ?></span>
                                    </button></h5>
                                    <h3 align="center"><i class="fa-solid fa-ban text-danger mt-4" style="font-size:35px;"></i></h3>
                                    </div>
                                    <div class="col-sm-6">
                                <p class="card-text">Total Blocked Users</p>
                                
                                <button type="button" class="btn btn-primary mt-5">Check</button>
                                </div>
                                </div>
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