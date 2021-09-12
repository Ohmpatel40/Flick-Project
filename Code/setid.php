<?php
    session_start();
    $id = $_GET['id'];
    $_SESSION['mid'] = $id;
    echo "<script>";
        echo ("location.href='home.php'");
    echo "</script>";
?>