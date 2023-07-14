
<?php

$user_id=$_GET['user_id'];
$pdo = require '../connect.php'; 

//UPDATING STATUS: ENABLED OR DISABLED
try{
    $sql = "SELECT * FROM tbl_user WHERE user_id = :user_id";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':user_id',$user_id);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $status = $row ['status'];
    if ($status=='Inactive'){
        //make it Active!!
        try{
            $status='Active';
            $sql ='UPDATE tbl_user SET status=:status WHERE user_id=:user_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':user_id',$user_id);
            $statement ->bindValue(':status',$status);
            $statement ->execute();
            echo '<script>window.location="../users.php"</script>';
        }catch(PDOException $e){
            echo $sql . '<br>'. $e->getMessage();
        }
    }else{
        //make it Inactive!!
        try{
            $status='Inactive';
            $sql ='UPDATE tbl_user SET status=:status WHERE user_id=:user_id';
            $statement = $pdo->prepare($sql);
            $statement ->bindValue(':user_id',$user_id);
            $statement ->bindValue(':status',$status);
            $statement ->execute();
            echo '<script>window.location="../users.php"</script>';
        }catch(PDOException $e){
            echo $sql . '<br>'. $e->getMessage();
        }
    }

}catch(PDOException $e){
    echo $sql . '<br>'. $e->getMessage();
}
$pdo=null;
$sql=null;

?>