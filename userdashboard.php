<?php
session_start();
if($_SESSION['user']=="")
{
  session_destroy();
header("location:userlogout.php");
}


$email=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{

$filename=$row['profilepic'];
$name=$row['name'];
}

date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('H:i:s');
    if ($currentTime >= '05:00:00' && $currentTime < '12:00:00') {
        $greeting = "Good morning!";
    } elseif ($currentTime >= '12:00:00' && $currentTime < '17:00:00') {
        $greeting = "Good afternoon!";
    } else {
        $greeting = "Good evening!";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grievance Redressal Portal</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="./css/dashstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-info p-1 me-0" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      </a>
      <li class="mt-2">
      <a href="userdash2.php" class="nav-link h3 text-white mt-0 px-3"><i class="fa-solid fa-house"></i>
        Dashboard
</a>
    </li>
      
      <li href="userdash2.php">
      <a class=" text-light px-4" href="userdash2.php">
      <h5 class="px-3">L.N.M.University</h5>
        </a> 
      </li>
      
      <li href="profileedit.php" class="nav-link mb-4">
        <i class="bx bx-user-check" ></i>
        <a class="mx-1 text-light" href="profileedit.php">Update Profile</a>
      </li>
      <li href="addcomplain.php" class="nav-link mb-4">
      <i class="fa-solid fa-building"></i>
        <a href="addcomplain.php" class="mx-2 text-light">Add Complaint</a>
      </li>
      <li href="mycomplaint.php" class="nav-link mb-4">
      <i class="fa-regular fa-building"></i>
        <a href="mycomplaint.php" class="mx-2 text-light">My Complaint</a>
      </li>
      
        <li href="closecomplaint.php" class="nav-link mb-4">
        <i class="fa-sharp fa-regular fa-building"></i>
        <a href="closecomplaint.php" class="mx-2 text-light">Closed Complaint</a>
      </li>
      <li href="pendingcomplain.php" class="nav-link mb-4">
        <i class="fa-sharp fa-regular fa-building"></i>
        <a href="pendingcomplaint.php" class="mx-2 text-light">Pending Complaint</a>
      </li>
      <li href="userchange.php" class="nav-link mb-4">
      <i class="fa-sharp fa-solid fa-lock"></i>
        <a href="userchange.php" class="mx-2 text-light">Change Password</a>
      </li>
    <li href="#" class="nav-link mb-4">
    <i class="fa-brands fa-rocketchat"></i>
        <a href="discus.php" class="mx-2 text-light">Discusion Forum</a>
      </li>
      
      <li href="userlogout.php" class="nav-link">
      <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
        <a href="userlogout.php" class="mx-2 text-light">Logout</a>
      </li>
      </ul>
    <span href="#" class="nav-link h4 w-100 mb-1">
      <a href="#"><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href="#"><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href="#"><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
  <div class="p-0 my-container active-cont" id="top-nav">
    <!-- Top Nav -->
    
    <nav class="navbar top-navbar navbar-light bg-info px-5 text-light w-100">
      
      <a class="btn border-0  text-danger" id="menu-btn"><i class="bx bx-menu"></i></a>
      <p id="greet">
      <?php
    echo $greeting." "; 
    echo $name;
    ?>
    </p>
      <i class="fa-solid fa-house" style="color: #19263e; font-size:25px;"></i>
      <i class="fa-solid fa-envelope" style="color: #0b121e; font-size:25px;"></i>
      <i class="fa-solid fa-bell" style="color: #121b2b; font-size:25px;"></i>
      <?php
      echo "$_SESSION[user]";
      echo "<br/>";
      date_default_timezone_set('Asia/Kolkata');
      $timeformate=time();
      $formattedTime = date("h:i A", $timeformate);
      echo $formattedTime.date('d-m-Y');
    
     
      ?>
      <div class="dropdown ">
   <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="student/<?php echo $filename; ?>" style="max-width:35px; border-radius:50%; " class="me-5"/>
    </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Add Account</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="userlogout.php">Logout</a></li>
            </ul>
    </div>

    </nav>
    <!--End Top Nav -->
    
    
  </div>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script>
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
    sidebar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
});

  </script>
  
</body>

</html>