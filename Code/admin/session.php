<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        echo "<script>";
            echo ("location.href='login.php'");
        echo "</script>";
    }
?>