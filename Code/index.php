<?php
    include 'connection.php';
    include 'session.php';

    $q = "select * from members where Email='".$_SESSION['email']."'";
    $exectue = mysqli_query($conn,$q);
    $nums = mysqli_num_rows($exectue);
    $stat = "";
    if($nums <= 4)
    {
        $stat = "";
    }
    else
    {
        $stat = "disable";
    }
?>

<html>
<head>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="../Assets/favicon.png" type="image/png">
    </head>
    <body>
        <div class="whos_watching">
            <img src="../Assets/Logo.svg" alt="Logo" class="sign_in_logo" />     
            <div class="main_div">
                <h1 class="whos_watch_head"> Who's Watching</h1>
                <div class="all_user">
                    <?php 
                        while($res = mysqli_fetch_array($exectue))
                        {
                            echo " <div class='users'>";
                            echo " <a href='setid.php?id=".$res['MID']." '> <img src=' ".$res['Icon_URL']." ' alt='logo' class='user_img' /> </a> ";
                            echo " <h6 class='user_name'> ".$res['Name']."</h6>";
                            echo "</div> ";
                        }
                    ?>  
                    <div class="users <?php echo $stat ?>">
                        <a href="new_user.php" > <button class="add_user"> <i class="fas fa-plus"></i> </button> </a>
                        <h6 class="user_name"> Add Profile </h6>
                    </div>
                </div>
                <a href="manage.php"> <button class="manage"> Manage Profiles </button> </a>
            </div>
        </div>
    </body>
</html>