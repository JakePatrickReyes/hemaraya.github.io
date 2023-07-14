<?php

$appointment_id=$_GET['appointment_id'];
$pdo = require '../connect.php'; 

//approved
try{
    $sql = "SELECT * FROM tbl_appointment WHERE appointment_id = :appointment_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':appointment_id',$appointment_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $appointment_status = $row ['appointment_status'];
    $user_id = $row ['user_id'];
    $requestedAppt = $row ['requestedAppt'];
        //make it Approved!!
        try{
            $appointment_status='Completed';
            $sql ='UPDATE tbl_appointment SET appointment_status=:appointment_status WHERE appointment_id=:appointment_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':appointment_id',$appointment_id);
            $statement ->bindValue(':appointment_status',$appointment_status);
            $statement ->execute();
            insertLogs($pdo,$user_id,$requestedAppt);
            echo '<script>window.location="../appointments.php"</script>';
        }catch(PDOException $e){
            echo $sql . '<br>'. $e->getMessage();
        }

}
catch(PDOException $e){
    echo $sql . '<br>'. $e->getMessage();
}
$pdo=null;
$sql=null;

?>

<?php
    function insertLogs($pdo,$user_id,$requestedAppt){
            date_default_timezone_set('Asia/Manila');
            $DT = date('Y-m-d H:i:s');
            $sql ='INSERT INTO tbl_logs(user_id,details,DT) VALUES (:user_id,:details,:DT)';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':user_id',$user_id);
            $statement ->bindValue(':details','Your appointment for '. $requestedAppt .' has been completed. Thank you!');
            $statement ->bindValue(':DT',$DT);
            $statement ->execute();
            $pdo=null;
            $sql=null;
    }
?>