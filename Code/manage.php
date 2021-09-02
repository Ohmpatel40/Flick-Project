<?php
    include 'connection.php';

    $q = "select * from users";
    $exectue = mysqli_query($conn,$q);
?>

<html>
<head>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="whos_watching">
            <img src="../Assets/Logo.svg" alt="Logo" class="sign_in_logo" />     
            <div class="main_div">
                <h1 class="whos_watch_head"> Manage Profile</h1>
                <div class="all_user">
                    <?php 
                        while($res = mysqli_fetch_array($exectue))
                        {
                            echo " <div class='users'>";
                            echo " <a href='update_profile.php?id=".$res['ID']."'> <img src=' ".$res['Icon_URL']." ' alt='logo' class='user_img' />";
                            echo " <h6 class='user_name'> &nbsp &nbsp &nbsp &nbsp &nbsp ".$res['Name']." &nbsp<i class='fas fa-pencil-alt'></i> </h6> </a>";
                            echo "</div> ";
                        }
                    ?>  
                </div>
            </div>
        </div>
    </body>
</html>