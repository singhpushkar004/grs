<?php
include("userdashboard.php");

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
    border-radius:1rem;
    }
   
   input::-webkit-file-upload-button
   {
    visibility: hidden;
   }
   input::file-selector-button{
    visibility: hidden;

   }
   
   #input-upload::before{
    content: "Browse Profile Picture";
    background-color:rgb(71, 101, 255);
    
        border-radius: 3px ;
        padding: 5px;
        cursor: pointer;
        color: white;
    
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
        <h3 align="center" class="p-3">Upload Profile Picture</h6>
        <form action="piccode.php" method="post" class="p-2" enctype="multipart/form-data">
        <label for="file">Choose a file</label>
            <input type="file" name="file" class="form-control mt-2 p-3" accept="image/png,image/jpg/,image/jpeg" aria-label="File Browse"  id="input-upload" >
            
            <center><input type="submit" value="Upload picture" class="btn btn-primary mt-3 btn-lg"></center>
        </form>
        </div>
    </div>

</div>


</body>
</html>

