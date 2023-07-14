<?php
    error_reporting(0);
    session_start();
    if($_SESSION['admin_username']=='' || empty($_SESSION['admin_username'])){  
      echo "<meta http-equiv='refresh' content='0;url=index.php' />"; 
    }
?>

<?php
	$pdo = require 'connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
     <meta name ="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <title>Hemaraya || Blood Donation</title>

     <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/adminstyle.css">

</head>

<body>
     <!-- Sidebar -->

     <input type="checkbox" id="nav-toggle">
     <div class="sidebar">
          <div class="sidebar-brand">
               <h2><span> <img src="images/HemaLogo.png" alt="" style="width: 300px; height: 65px;"></span> </h2>
          </div>

          <div class="sidebar-menu">
               <ul>
                    <li>
                         <a href="" class="active"><span class="las la-igloo"></span>
                              <span>Dashboard</span></a>
                    </li>
                    <li>
                         <a href="users.php"><span class="las la-users"></span>
                              <span>Users</span></a>
                    </li>
                    <li>
                         <a href="donors.php"><span class="las la-hand-holding-heart"></span>
                              <span>Donors</span></a>
                    </li>
                    <li>
                         <a href="requestors.php"><span class="las la-hands-helping"></span>
                              <span>Requestors</span></a>
                    </li>
                    <li>
                         <a href="appointments.php"><span class="las la-briefcase"></span>
                              <span>Appointments</span></a>
                    </li>
                    <li>
                         <a href="events.php"><span class="las la-calendar-times"></span>
                              <span>Drive/Events</span></a>
                    </li>
                    <li>
                         <a href="levels.php"><span class="las la-hospital-alt"></span>
                              <span>Hospital Blood Level</span></a>
                    </li>
               </ul>
          </div>
     </div>

     <!-- Header -->
     <div class="main-content">
          <header>
               <h2>
                         <label for="nav-toggle">
                              <span class="las la-bars"></span>
                         </label>
                         Dashboard
               </h2>
               
               <div class="user-wrapper">
                    <img src="images/user.png" width="40px" height="40px" alt="">
                    <div>
                         <h4>Admin</h4>
                         <a href="logout.php"><small style="display:inline-block; color:#8390A2;">Logout</small></a>
                    </div>
               </div>
          </header>

          <main>
               <div class="cards">
                    <div class="card-single">
                         <div>
<!-- COunting row -->
                         <?php 
                              $sql = "SELECT COUNT(*) FROM tbl_user";
                              $res = $pdo->query($sql);
                              $count = $res->fetchColumn();
                              echo '<h1>'.$count.'</h1>';
                         ?>
                              <span>Users</span>
                         </div>
                         <div>
                              <span class="las la-users"></span>
                         </div>
                    </div>
                    <div class="card-single">
                         <div>
                         <?php 
                              $sql = "SELECT COUNT(*) FROM tbl_donors";
                              $res = $pdo->query($sql);
                              $count = $res->fetchColumn();
                              echo '<h1>'.$count.'</h1>';
                         ?>
                              <span>Donors</span>
                         </div>
                         <div>
                              <span class="las la-hand-holding-heart"></span>
                         </div>
                    </div>
                    <div class="card-single">
                         <div>
                              
                         <?php 
                              $sql = "SELECT COUNT(*) FROM tbl_requestors";
                              $res = $pdo->query($sql);
                              $count = $res->fetchColumn();
                              echo '<h1>'.$count.'</h1>';
                         ?>
                              <span>Requestors</span>
                         </div>
                         <div>
                              <span class="las la-hands-helping"></span>
                         </div>
                    </div>
                    <div class="card-single">
                         <div>
                              
                         <?php 
                              $sql = "SELECT COUNT(*) FROM tbl_appointment";
                              $res = $pdo->query($sql);
                              $count = $res->fetchColumn();
                              echo '<h1>'.$count.'</h1>';
                         ?>
                              <span>Appointments</span>
                         </div>
                         <div>
                              <span class="las la-briefcase"></span>
                         </div>
                    </div>
                    <div class="card-single">
                         <div>
                              
                         <?php 
                              $sql = "SELECT COUNT(*) FROM tbl_events";
                              $res = $pdo->query($sql);
                              $count = $res->fetchColumn();
                              echo '<h1>'.$count.'</h1>';
                         ?>
                              <span>Events</span>
                         </div>
                         <div>
                              <span class="las la-calendar-times"></span>
                         </div>
                    </div>
                    <div class="card-single" style="background: #fff; " >
                         <div>
                              <?php 
                              $sql = "SELECT COUNT(*) FROM tbl_hospital";
                              $res = $pdo->query($sql);
                              $count = $res->fetchColumn();
                              echo '<h1 style="color:black">'.$count.'</h1>';
                         ?>
                              <span style="color: #8390A2;; ">Hospital Blood Level</span>
                         </div>
                         <div>
                         
                              <span class="las la-hospital-alt" style="color: #F5DEB2; "></span>
                         </div>
                    </div>
               </div>
          </main>
     </div>
</body>

</html>