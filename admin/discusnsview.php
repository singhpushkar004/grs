<?php
$qid=$_REQUEST['qid'];
//echo $qid;
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_answer where qid='$qid'";
$res=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contaner">
    <div class="row">
<div class="col-sm-3"></div>   
<div class="col-sm-8 ms-1 p-2 table-responsive">
<table border="2px" class="table table-bordered w-100 table-hover">
    <tr>
    <th>S No.</th>
    <th>Question</th>
    <th>View Answer</th>
    </tr>
  
 
    <?php
    $a=1;
                while($row=mysqli_fetch_array($res))
            {
                $answer=$row['answer'];
                $qid=$row['qid'];
           
            ?>
    <tr>

        <td><?php echo $a; ?></td>
        <?php
        $query2="select * from tbl_question where qid='$qid'";
        $res2=mysqli_query($con,$query2);
        if($row2=mysqli_fetch_array($res2))
                {
                    $question=$row2['question'];
                }
        ?>
       <td><?php echo $question; ?></td>
        <td><?php echo $answer; ?></td>

       
   

    </tr>
  
    <?php
    $a++;
            }
       ?>
</table>
</div>
</div>
</div>
    </div>
</body>
</html>