<?php

$event_id=$_GET['event_id'];
$pdo = require '../connect.php'; 

//approved
try{
    $sql = "SELECT * FROM tbl_events WHERE event_id = :event_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':event_id',$event_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $event_status = $row ['event_status'];
    $user_id = $row ['user_id'];
    $event_date = $row ['event_date'];
    $date_approved = $row ['date_approved'];
        //make it Approved!!
        try{
            $event_status='Approved';
            // GET CURRENT DATE AND TIME STAMP IN DEFAULT TIMEZONE
            date_default_timezone_set('Asia/Manila');
            $date_approved = date('Y-m-d h:i:sa');
            $sql ='UPDATE tbl_events SET event_status=:event_status, date_approved=:date_approved WHERE event_id=:event_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':event_id',$event_id);
            $statement ->bindValue(':event_status',$event_status);
            $statement ->bindValue(':date_approved',$date_approved);
            $statement ->execute();
            insertLogs($pdo,$user_id,$event_date);
            echo '<script>window.location="../events.php"</script>';
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
    function insertLogs($pdo,$user_id,$event_date){
            date_default_timezone_set('Asia/Manila');
            $DT = date('Y-m-d H:i:s');
            $sql ='INSERT INTO tbl_logs(user_id,details,DT) VALUES (:user_id,:details,:DT)';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':user_id',$user_id);
            $statement ->bindValue(':details','Your request for an event on '. $event_date .' has been approved.');
            $statement ->bindValue(':DT',$DT);
            $statement ->execute();
            $pdo=null;
            $sql=null;
    }
?>