<?php

$donor_id=$_GET['donor_id'];
$pdo = require '../connect.php'; 

//approved
try{
    $sql = "SELECT * FROM tbl_donors WHERE donor_id = :donor_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':donor_id',$donor_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $donor_status = $row ['donor_status'];
    $user_id = $row ['user_id'];
    $date_approved = $row ['date_approved'];
        //make it Approved!!
        try{
            $donor_status='Approved';
            // GET CURRENT DATE AND TIME STAMP IN DEFAULT TIMEZONE
            date_default_timezone_set('Asia/Manila');
            $date_approved = date('Y-m-d h:i:sa');
            $sql ='UPDATE tbl_donors SET donor_status=:donor_status, date_approved=:date_approved WHERE donor_id=:donor_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':donor_id',$donor_id);
            $statement ->bindValue(':donor_status',$donor_status);
            $statement ->bindValue(':date_approved',$date_approved);
            $statement ->execute();
            insertLogs($pdo,$user_id);
            echo '<script>window.location="../donors.php"</script>';
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
    function insertLogs($pdo,$user_id){
            date_default_timezone_set('Asia/Manila');
            $DT = date('Y-m-d H:i:s');
            $sql ='INSERT INTO tbl_logs(user_id,details,DT) VALUES (:user_id,:details,:DT)';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':user_id',$user_id);
            $statement ->bindValue(':details','Your donation appointment has been approved. We will see you at the hospital!');
            $statement ->bindValue(':DT',$DT);
            $statement ->execute();
            $pdo=null;
            $sql=null;
    }
?>