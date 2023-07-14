<?php

$requestor_id=$_GET['requestor_id'];
$pdo = require '../connect.php'; 

//approved
try{
    $sql = "SELECT * FROM tbl_requestors WHERE requestor_id = :requestor_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':requestor_id',$requestor_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $requestor_status = $row ['requestor_status'];
    $user_id = $row ['user_id'];
    $date_approved = $row ['date_approved'];
        //make it Approved!!
        try{
            $requestor_status='Approved';
            // GET CURRENT DATE AND TIME STAMP IN DEFAULT TIMEZONE
            date_default_timezone_set('Asia/Manila');
            $date_approved = date('Y-m-d h:i:sa');
            $sql ='UPDATE tbl_requestors SET requestor_status=:requestor_status, date_approved=:date_approved WHERE requestor_id=:requestor_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':requestor_id',$requestor_id);
            $statement ->bindValue(':requestor_status',$requestor_status);
            $statement ->bindValue(':date_approved',$date_approved);
            $statement ->execute();
            insertLogs($pdo,$user_id);
            echo '<script>window.location="../requestors.php"</script>';
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
            $statement ->bindValue(':details','Your blood request appointment has been approved. We will see you at the hospital!');
            $statement ->bindValue(':DT',$DT);
            $statement ->execute();
            $pdo=null;
            $sql=null;
    }
?>