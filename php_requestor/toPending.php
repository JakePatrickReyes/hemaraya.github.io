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
        //make it Approved!!
        try{
            $requestor_status='Pending';
            $sql ='UPDATE tbl_requestors SET requestor_status=:requestor_status WHERE requestor_id=:requestor_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':requestor_id',$requestor_id);
            $statement ->bindValue(':requestor_status',$requestor_status);
            $statement ->execute();
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