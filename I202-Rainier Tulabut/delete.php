<?php
include "db_conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM `crudd` WHERE id = $id";
$result = mysqli_query($conn,$sql);

if($result){
    $sql_reset = "ALTER TABLE crudd AUTO_INCREMENT = 1";
    mysqli_query($conn, $sql_reset);
    header("Location:index.php?msg= User deleted successfully");
}
else{
    echo"Failed" . mysqli_error($conn);
}
?>