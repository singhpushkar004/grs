<?php
session_start();
if($_SESSION['user']=="")
{
  session_destroy();
header("location:adminlogout.php");
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
  <link rel="stylesheet" href="../css/dashstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-primary p-1 me-0" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      
      <li href="#" class="nav-link ms-5">
      <a class="mx-2 text-light" href="dashboard.php">
      <i class="fa-solid fa-circle-user" style="font-size:45px;"></i>
        </a> 
      </li>
      <a href="dash2.php" class="nav-link h3 text-white my-1">
      <i class="fa-solid fa-house"></i> Dashboard</br>
      </a>
      <hr>
      <li href="dash2.php" class="nav-link p-0 px-3">
      <a class=" text-light" href="dash2.php">
      <h4>L.N.M.University</h4>
        </a> 
      </li>
      <hr>
      <li href="college.php" class="nav-link mb-2">
        <i class="bx bx-user-check"></i>
        <a class="mx-2 text-light" href="college.php">College Management</a>
      </li>
      <li href="session.php" class="nav-link mb-2">
        <i class="bx bxs-dashboard"></i>
        <a href="session.php" class="mx-2 text-light">Session Management</a>
      </li>
      <li href="session.php" class="nav-link mb-2">
      <i class="fa-sharp fa-regular fa-building"></i>
        <a href="complain.php" class="mx-2 text-light">Complaint Type</a>
      </li>
      <li class="nav-item dropdown mb-2 ">
      
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-building px-1"></i>Complaint Management
            </a>
            <ul class="dropdown-menu dropdown-menu-dark ">
              <li><a class="dropdown-item" href="notprocessyet.php">Not Processed yet</a></li>
              <li><a class="dropdown-item" href="pc.php">Pending Complaint</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="cc.php">Closed Complaint</a></li>
              <li><a class="dropdown-item" href="#">Download Report</a></li>
            </ul>
          </li>
      
        <li href="session.php" class="nav-link mb-2">
        <i class="fa-solid fa-user-group"></i>
        <a href="usermanege.php" class="mx-2 text-light">User Log Management</a>
      </li>
 
    <li href="session.php" class="nav-link mb-2">
    <i class="fa-brands fa-rocketchat"></i>
        <a href="discus.php" class="mx-2 text-light">Discusion Forum</a>
      </li>
      <li href="session.php" class="nav-link mb-2">
      <i class="fa-solid fa-ban"></i>
        <a href="blockshowuser.php" class="mx-2 text-light">Blocked Users</a>
      </li>
      <li href="session.php" class="nav-link mb-2">
      <i class="fa-sharp fa-solid fa-lock"></i>
        <a href="adminchange.php" class="mx-2 text-light">Change Password</a>
      </li>
      <li href="session.php" class="nav-link">
      <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
        <a href="adminlogout.php" class="mx-2 text-light">Logout</a>
      </li>
      </ul>
    <span href="#" class="nav-link h4 w-100 mb-1">
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
  <div class="p-0 my-container active-cont" id="top-nav">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-primary px-5 text-light">
      <a class="btn border-0  text-danger" id="menu-btn"><i class="bx bx-menu"></i></a>
      <i class="fa-solid fa-house" style="color: #19263e; font-size:25px;"></i>
      <i class="fa-solid fa-envelope" style="color: #0b121e; font-size:25px;"></i>
      <i class="fa-solid fa-bell" style="color: #121b2b; font-size:25px;"></i>
      <?php
      echo "$_SESSION[user]";
      echo "<br/>";
      date_default_timezone_set('Asia/Kolkata');
      echo date('Y-m-d H:i:s');
      ?>
      <div class="dropdown ">
   <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="../images/userlogin2.png" style="width: 40px; border-radius:50%; " class="me-5"/>
    </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="adminlogout.php">Logout</a></li>
            </ul>
    </div>

    </nav>
    <!--End Top Nav -->
    
    
  </div>
<!-- main start -->

<!-- main end -->
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