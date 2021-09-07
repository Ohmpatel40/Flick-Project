<?php
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    echo "<script>";
        echo ("location.href='home.php'");
    echo "</script>";
?>