<?php 
    $id = $_GET['id'];
    include 'connection.php';

    $q = "select * from users where UID = '$id'";
    $query = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($query);

    if($res['Status'] == 'Active')
    {
        $q = "update users set Status = 'Inactive' where UID = '$id'";
    }
    else
    {
        $q = "update users set Status = 'Active' where UID = '$id'";
    }

    $query = mysqli_query($conn,$q);
    if($query)
    {
        echo "<script>";
            echo ("location.href='all_users.php'");
        echo "</script>";
    } 

?>