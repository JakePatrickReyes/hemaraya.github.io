<?php

$requestor_id=$_GET['requestor_id'];
$pdo = require '../connect.php'; 

//approved
try{
    $sql = "SELECT * FROM tbl_requestors 
    INNER JOIN tbl_user on tbl_requestors.user_id = tbl_user.user_id 
    LEFT JOIN tbl_hospital ON tbl_requestors.hospital_id = tbl_hospital.hospital_id
    WHERE requestor_id = :requestor_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':requestor_id',$requestor_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $requestor_status = $row ['requestor_status'];
    $user_id = $row ['user_id'];
    $blood_type = $row ['blood_type'];
        //make it Completed!!
        try{
            $requestor_status='Completed';

            if ($blood_type === 'O+'){
                $sql ='UPDATE tbl_hospital SET bloodstock_o_plus=bloodstock_o_plus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'O-'){
                $sql ='UPDATE tbl_hospital SET bloodstock_o_minus=bloodstock_o_minus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'A+'){
                $sql ='UPDATE tbl_hospital SET bloodstock_a_plus=bloodstock_a_plus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'A-'){
                $sql ='UPDATE tbl_hospital SET bloodstock_a_minus=bloodstock_a_minus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'B+'){
                $sql ='UPDATE tbl_hospital SET bloodstock_b_plus=bloodstock_b_plus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'B-'){
                $sql ='UPDATE tbl_hospital SET bloodstock_b_minus=bloodstock_b_minus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'AB+'){
                $sql ='UPDATE tbl_hospital SET bloodstock_ab_plus=bloodstock_ab_plus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }else if($blood_type === 'AB-'){
                $sql ='UPDATE tbl_hospital SET bloodstock_ab_minus=bloodstock_ab_minus - 1';
                $statement = $pdo->prepare($sql);
                $statement ->execute();
            }

            $sql ='UPDATE tbl_requestors SET requestor_status=:requestor_status WHERE requestor_id=:requestor_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':requestor_id',$requestor_id);
            $statement ->bindValue(':requestor_status',$requestor_status);
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
            $statement ->bindValue(':details','Your blood request appointment has been completed. Please take care of yourself!');
            $statement ->bindValue(':DT',$DT);
            $statement ->execute();
            $pdo=null;
            $sql=null;
    }
?>