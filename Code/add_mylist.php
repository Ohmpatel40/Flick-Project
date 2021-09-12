<?php
    $id = $_GET['id'];
    include 'session.php';
    include 'connection.php';
    $q = "select * from mylist where ID = '$id' and Email = '".$_SESSION['email']."'";
    $query = mysqli_query($conn,$q);
    $num = mysqli_num_rows($query);

    if($num == 0)
    {
        $q = "insert into mylist(MID,Email,ID)values('".$_SESSION['mid']."' , '".$_SESSION['email']."' , '".$id."')";
        $query = mysqli_query($conn,$q);
        
        if($query)
        {
            echo "<script>";
                echo ("window.history.back();");
            echo "</script>";
        } 
    }
   else
    {
        echo "<script>";
                echo ("window.history.back();");
        echo "</script>";
    }   
?>