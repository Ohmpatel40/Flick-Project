<?php
    include 'connection.php';
    $ids = $_GET['id']; 
    $q = "delete from users where ID = $ids";
    $execute = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($execute);

    header('location:index.php');
?>