<?php
    error_reporting(0);
    session_start();
    if($_SESSION['admin_username']=='' || empty($_SESSION['admin_username'])){  
      echo "<meta http-equiv='refresh' content='0;url=index.php' />"; 
    }
?>

<!-- PHP CODE FOR RETRIEVING AND DISPLAYING USER INFORMATION -->
<?php
	$hospital_id= $_GET['hospital_id'];
	$pdo = require 'connect.php'; 
    session_start();
    if($_SESSION['admin_username']=='' || empty($_SESSION['admin_username'])){  
      echo "<meta http-equiv='refresh' content='0;url=index.php' />"; 
    }

	try{
		$sql = "SELECT * FROM tbl_hospital WHERE hospital_id = :hospital_id";
		$statement = $pdo->prepare($sql);
		$statement ->bindValue(':hospital_id',$hospital_id);
		$statement->execute();
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		$hospital_id = $row ['hospital_id'];
		$hospital_name = $row ['hospital_name'];
		$bloodstock_o_plus = $row ['bloodstock_o_plus'];
		$bloodstock_o_minus = $row ['bloodstock_o_minus'];
        $bloodstock_a_plus = $row ['bloodstock_a_plus'];
		$bloodstock_a_minus = $row ['bloodstock_a_minus'];
        $bloodstock_b_plus = $row ['bloodstock_b_plus'];
		$bloodstock_b_minus = $row ['bloodstock_b_minus'];
        $bloodstock_ab_plus = $row ['bloodstock_ab_plus'];
		$bloodstock_ab_minus = $row ['bloodstock_ab_minus'];
	}catch(PDOException $e){
		echo $sql . '<br>'. $e->getMessage();
	}

	$pdo=null;
	$sql=null;
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Hemaraya || Blood Donation </title>
	<link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/adminstyle.css">
</head>

<style>
	* {
		font-family: verdana;
	}



	.btnAdd {
		padding: 5px;
		border: none;
		border-radius: 5px;
		color: #CEE5D0;
		border-style: solid;
		border-color: #235d3a;
		background-color: #235d3a;
		font-size: 15px;
	}

	.btnAdd:hover {
		opacity: 70%;
		transition: 0.5s;

	}

    .form-control{
        width:100px;
        text-align:center;     
    }
    .control-label{
        margin-left:120px;
    }
	
</style>

<body style="background-image: url('images/bg.jpg');background-size: cover;">

	<!-- COURSE INFORMATION PANEL -->
	<div class="container-fluid text-center" style="align=center">
		<div class="container" style="width: 1000px; float:center;padding-top: 210px;padding-bottom:90px;">
			<div class="panel panel-success" style="border-color: #CEE5D0">
			<!-- TITLE OF TABLE -->
      			<div class="panel-heading" align="center" style="font-size:25px; text-transform: uppercase; background-color: #F5DEB2; color: black">
				  <strong>Update Blood Stocks</strong>
				</div>

			<div class="panel-body" style="width:100%; height:100%; padding: 50px">
			<form class="form-horizontal" action="updateHospital.php" role="form" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2">O+ Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_o_plus" value="<?php echo $bloodstock_o_plus ?>" required autofocus>
					</div>
                    <label class="control-label col-sm-2" >O- Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_o_minus" value="<?php echo $bloodstock_o_minus ?>" required>
					</div>
				</div>
                <div class="form-group">
					<label class="control-label col-sm-2" >A+ Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_a_plus" value="<?php echo $bloodstock_a_plus ?>" required>
					</div>
                    <label class="control-label col-sm-2" >A- Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_a_minus" value="<?php echo $bloodstock_a_minus ?>" required>
					</div>
				</div>

                <div class="form-group">
					<label class="control-label col-sm-2" >B+ Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_b_plus" value="<?php echo $bloodstock_b_plus ?>" required>
					</div>
                    <label class="control-label col-sm-2" >B- Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_b_minus" value="<?php echo $bloodstock_b_minus ?>" required>
					</div>
				</div>

                <div class="form-group">
					<label class="control-label col-sm-2" >AB+ Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_ab_plus" value="<?php echo $bloodstock_ab_plus ?>" required>
					</div>
                    <label class="control-label col-sm-2" >AB- Stock:</label>
					<div class="col-sm-1">
					<input type="text" class="form-control" name="bloodstock_ab_minus" value="<?php echo $bloodstock_ab_minus ?>" required>
					</div>
				</div>
            

<br>
				<button type="submit" class="btn btn-danger" style="width: 30%; padding: 10px; background-color: #0d521d;border-color: #0d521d" value="Submit">Update</button>
				<a href="levels.php" class="btn btn-danger" style="width: 30%;  padding: 10px" >Cancel</a>
			</form>
			</div>
		</div>
	</div>

</body>
</html>











