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
    $date_approved = $row ['date_approved'];
        //make it Approved!!
        try{
            $appointment_status='Approved';
            // GET CURRENT DATE AND TIME STAMP IN DEFAULT TIMEZONE
            date_default_timezone_set('Asia/Manila');
            $date_approved = date('Y-m-d h:i:sa');
            $sql ='UPDATE tbl_appointment SET appointment_status=:appointment_status, date_approved=:date_approved WHERE appointment_id=:appointment_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':appointment_id',$appointment_id);
            $statement ->bindValue(':appointment_status',$appointment_status);
            $statement ->bindValue(':date_approved',$date_approved);
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
            $statement ->bindValue(':details','Your request for '. $requestedAppt .' appointment has been approved. We will see you at the hospital!');
            $statement ->bindValue(':DT',$DT);
            $statement ->execute();
            $pdo=null;
            $sql=null;
    }
?>