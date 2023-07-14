<?php

$donor_id=$_GET['donor_id'];
$pdo = require '../connect.php'; 

//pending
try{
    $sql = "SELECT * FROM tbl_donors WHERE donor_id = :donor_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':donor_id',$donor_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $donor_status = $row ['donor_status'];
        //make it Pending!!
        try{
            $donor_status='Pending';
            $sql ='UPDATE tbl_donors SET donor_status=:donor_status WHERE donor_id=:donor_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':donor_id',$donor_id);
            $statement ->bindValue(':donor_status',$donor_status);
            $statement ->execute();
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