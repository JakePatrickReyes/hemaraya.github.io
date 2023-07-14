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
        //make it Approved!!
        try{
            $appointment_status='Pending';
            $sql ='UPDATE tbl_appointment SET appointment_status=:appointment_status WHERE appointment_id=:appointment_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':appointment_id',$appointment_id);
            $statement ->bindValue(':appointment_status',$appointment_status);
            $statement ->execute();
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