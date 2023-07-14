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
        //make it Approved!!
        try{
            $event_status='Pending';
            $sql ='UPDATE tbl_events SET event_status=:event_status WHERE event_id=:event_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':event_id',$event_id);
            $statement ->bindValue(':event_status',$event_status);
            $statement ->execute();
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