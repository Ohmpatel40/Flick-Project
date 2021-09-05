<?php

    include 'connection.php';
    $id = $_GET['id'];

    
    $q = "delete from movies where ID = '$id'";
    $query = mysqli_query($conn,$q);
    
    if($query)
    {
        echo "<script>";
            echo ("location.href='all_movies.php'");
        echo "</script>";
    }
    else 
    {
        echo "ERROR" ;
    }

?>