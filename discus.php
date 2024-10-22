<?php
include("userdashboard.php");
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_question";
$res=mysqli_query($con,$query);
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
        <h3 align="center" class="p-3">Ask  Question</h6>
        <form action="ques.php" method="post" class="p-2">
        <textarea name="ques" id="" cols="30" rows="3" class="form-control w-100 mt-2" required placeholder="please enter Your complain">

</textarea>
            <center><input type="submit" value="Add Question" class="btn btn-primary mt-4 btn-lg"></center>
        </form>
        </div>
    </div>

</div>
<div class="row">
<div class="col-sm-3"></div>   
<div class="col-sm-8 ms-1 p-2 table-responsive">
<table border="2px" class="table table-bordered w-100 table-hover">
    <tr>
    <th>S No.</th>
    <th>Question</th>
    <th>Post Answer</th>
    <th>View Answer</th>
    </tr>
    <?php
    $i=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['question'];?></td>
        <td><a href="post.php?qid=<?php echo $row['qid']; ?>">Post</a></td>
        <td><a href="view.php?qid=<?php echo $row['qid'];?>">View</a></td>


    </tr>
   <?php
   $i++;
    }
   ?>
</table>
</div>
</div>
</div>
</body>
</html>

