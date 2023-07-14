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
		function ToPending(donor_id){
			var ans = confirm("Are you sure you want to change the donor status?");
			if(ans){
				window.location = "php_donor/toPending.php?donor_id=" + donor_id; //displaying to url the selected user id
			}
		}
          function ToApproved(donor_id){
			var ans = confirm("Are you sure you want to change the donor status?");
			if(ans){
				window.location = "php_donor/toApproved.php?donor_id=" + donor_id; //displaying to url the selected user id
			}
		}
          function ToCompleted(donor_id){
			var ans = confirm("Are you sure you want to change the donor status?");
			if(ans){
				window.location = "php_donor/toCompleted.php?donor_id=" + donor_id; //displaying to url the selected user id
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
                         <a href="users.php" ><span class="las la-users"></span>
                              <span>Users</span></a>
                    </li>
                    <li>
                         <a href="donors.php" class="active"><span class="las la-hand-holding-heart"></span>
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
                                             <td>Donor ID</td>
                                             <td>Full Name</td>
                                             <td>Blood Type</td>
                                             <td>Q1</td>
                                             <td>Q2</td>
                                             <td>Q3</td>
                                             <td>Q4</td>
                                             <td>Q5</td>
                                             <td>Q6</td>
                                             <td>Q7</td>
                                             <td>Q8</td>
                                             <td>Q9</td>
                                             <td>Q10</td>
                                             <td>Q11</td>
                                             <td>Q12</td>
                                             <td>Q13</td>
                                             <td>Q14</td>
                                             <td>Q15</td>
                                             <td>Q16</td>
                                             <td>Q17</td>
                                             <td>Q18</td>
                                             <td>Q19</td>
                                             <td>Q20</td>
                                             <td>Q21</td>
                                             <td>Q22</td>
                                             <td>Q23</td>
                                             <td>Q24</td>
                                             <td>Q25</td>
                                             <td>Q26</td>
                                             <td>Q27</td>
                                             <td>Q28</td>
                                             <td>Q29</td>
                                             <td>Q30</td>
                                             <td>Q31</td>
                                             <td>Q32</td>
                                             <td>Q33</td>
                                             <td>Q34</td>
                                             <td>Q35</td>
                                             <td>Date Approved</td>
                                             <td>Status</td>
                                             <td>Action</td>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   <?php
                            
                                         populateDonor($pdo);
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