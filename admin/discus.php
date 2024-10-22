<?php
include("dashboard.php");
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_answer";
$res=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        td a{
            text-decoration: none;
        }
        #image{
        border-radius:1rem;
        width:50px;
        height:50px;
        box-shadow: 0px 0px 2px black;
        
      } 
    </style>
</head>
<body>
    <div class="contaner">
        <div class="row">
        <div class="col-sm-2 p-5 ms-4" ></div>
        <div class="col-sm-9 px-0 py-5 me-1" id="secondcard">
            <div class="table-responsive">
<table  class="table table-bordered w-100 table-hover text-dark text-center">
    <tr>
        <th>S No.</th>
        <th>Question By</th>
        <th>Question</th>
        
        <th>Answer</th>
        <th>Delete</th>
    </tr>
    <?php
    $i=1;
    while($row=mysqli_fetch_array($res))
   
    { 
        $uid=$row['id'];
        $qid=$row['qid']; 
    ?>
    <tr>
    <td><?php echo $i; ?></td>
    <?php
$query6="select * from tbl_question where qid='$qid'";
$res6=mysqli_query($con,$query6);
if($row6=mysqli_fetch_array($res6))
{
    $uid2=$row6['id'];
}
$query7="select * from tbl_user where uid='$uid2'";
$res7=mysqli_query($con,$query7);
if($row7=mysqli_fetch_array($res7))
{
    $name=$row7['name'];
    $filename2=$row7['profilepic'];
}

?>
<td><img src="../student/<?php echo $filename2; ?>" id="image"/>
    <?php echo $name?>

</td>
    <?php 
     $ques=$row['qid'];
    $query3="select * from tbl_question where qid='$ques'";
    $res3=mysqli_query($con,$query3);
        if($row3=mysqli_fetch_array($res3))
        {
            $question=$row3['question'];
           
            
            
        }
    ?>
    <td>
        <?php echo $question; ?>
    </td>
   
    
    <td><a href="discusnsview.php?qid=<?php echo $row['qid'] ?>">View</a></td>
    <td><a href="discusdelete.php?qid=<?php echo $row['qid']; ?>"><i class="fa-sharp fa-solid fa-trash text-dark" style="font-size: 47px;"></i></a></td>
  
   
   
    
    
    
    </tr>
    <?php
    $i++;
    }
    ?>

    </table>
    
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>