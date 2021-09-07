<?php
       session_start();
       $_SESSION['message'] = "";

       if(!isset($_SESSION['email']))
       {
           echo "<script>";
               echo ("location.href='sign_in.php'");
           echo "</script>";
       }
?>