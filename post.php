<?php 
include("userdashboard.php");
$qid=$_REQUEST['qid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .log-card{
    height:250px;
    box-shadow:0px 0px 18px rgb(24, 49, 172);
    width:100%;
    border-radius:  1rem ;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-3 " >
                       </div>
<div class="col-sm-6 ms-2 p-4 " id="secondcard">

    <div class="log-card ">
        <h3 align="center" class="p-3">Post  Question</h6>
        <form action="answer.php" method="post" class="p-2">
            <input type="hidden" name="qid" value="<?php  echo $qid?>">
        <textarea name="ans" id="" cols="30" rows="3" class="form-control w-100 mt-2" required placeholder="please enter Your complain">

</textarea>
            <center><input type="submit" value="Post Answer" class="btn btn-primary mt-4 btn-lg"></center>
        </form>
        </div>
    </div>

</div>

</body>
</html>

