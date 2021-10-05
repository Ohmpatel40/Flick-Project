<?php 
    session_start();
    $id = $_GET['id'];
    include 'connection.php';
    $q = "select * from users where UID = '$id'";
    $query = mysqli_query($conn, $q);
    $res = mysqli_fetch_array($query);

    $subject = 'Password Reset Link';
    $body = 'Hi '.$res['Username'].'! Click on the link to change Password: http://localhost/flick%20Project/Code/change_pass.php?token='.$res['Token'];
    $headers = 'From: ohm.flick@gmail.com';

    if(mail($res['Email'],$subject,$body,$headers))
    {
        $_SESSION['message'] = 'Password reset mail is been sent to '.$res['Username'].' ';
        echo "<script>";
            echo ("location.href='signout.php'");
        echo "</script>";
    }
?>