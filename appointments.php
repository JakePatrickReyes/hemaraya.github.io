<?php
    error_reporting(0);
    session_start();
    if($_SESSION['admin_username']=='' || empty($_SESSION['admin_username'])){  
      echo "<meta http-equiv='refresh' content='0;url=index.php' />"; 
    }
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
     <?php include 'populate.php'; ?>

     <script> 

//function for changing user status
function ToPending(appointment_id){
     var ans = confirm("Are you sure you want to change the appointment status?");
     if(ans){
          window.location = "php_appointment/toPending.php?appointment_id=" + appointment_id; //displaying to url the selected user id
     }
}
function ToApproved(appointment_id){
     var ans = confirm("Are you sure you want to change the appointment status?");
     if(ans){
          window.location = "php_appointment/toApproved.php?appointment_id=" + appointment_id; //displaying to url the selected user id
     }
}
function ToCompleted(appointment_id){
     var ans = confirm("Are you sure you want to change the appointment status?");
     if(ans){
          window.location = "php_appointment/toCompleted.php?appointment_id=" + appointment_id; //displaying to url the selected user id
     }
}
</script>

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
                         <a href="dashboard.php"><span class="las la-igloo"></span>
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
                         <a href="appointments.php" class="active"><span class="las la-briefcase"></span>
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
                         <a href="index.php"><small style="display:inline-block; color:#8390A2;">Logout</small></a>
                    </div>
               </div>
          </header>

          <main>
               <div class="card">
                    <div class="card-body">
                         <div class="table-responsive">
                              <table width="100%">
                                   <thead>
                                        <tr>
                                             <td>Appointment ID</td>
                                             <td>Fullname</td>
                                             <td>Requested Appointment</td>
                                             <td>Date Approved</td>
                                             <td>Status</td>
                                             <td>Action</td>

                                        </tr>
                                   </thead>
                                   <tbody>
                                   <?php
                            
                            populateAppointment($pdo);
                      ?>	
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </main>
     </div>
</body>

</html>