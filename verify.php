<?php
ob_start();
session_start();

$pdo = require 'connect.php'; 
$admin_username = $_POST['username'];
$admin_password = $_POST['password'];

try{
    $sql = "SELECT count(admin_username) AS rowCount, admin_username, admin_password FROM tbl_admin WHERE admin_username = :admin_username";
    $statement = $pdo->prepare($sql);
    $statement ->bindValue(':admin_username',$admin_username);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if ($row['rowCount']>0){
        if(($admin_password == $row['admin_password'])){
            $_SESSION['admin_username'] = $row['admin_username'];
            $_SESSION['admin_password'] = $row['admin_password'];
            echo '<script>window.location="dashboard.php"</script>';
        }
        else{
            echo '<script>window.location="index.php?stat=1"</script>';
        }
    }else{
        echo '<script>window.location="index.php?stat=2"</script>';
    }
    
}catch(PDOException $e){
    echo $sql . '<br>'. $e->getMessage();
}
$pdo=null;
$sql=null;
?>