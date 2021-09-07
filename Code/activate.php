<html>
<?php 
    session_start();
?>
<head>
        <title> </title>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="sign_in">
            <img src="../Assets/login-background.jpg" alt="bg" class="sign_in_bg" />
            <img src="../Assets/Logo.svg" alt="Logo" class="sign_in_logo" />
            <div class="sign_in_form">
                <?php 

                    include 'connection.php';
                    $token = $_GET['token'];

                    $q = "update users set Status = 'Active' where Token = '$token' ";
                    $query = mysqli_query($conn,$q);

                    if($query)
                    {
                        echo '
                            <div class="error success">
                                <h3 class="message" style = "font-size: 15px;"> <i class="fas fa-check-circle"></i> &nbsp Acount Activated </h3>
                            </div>
                            <h5 class="new_user"> Click here to <a class="sign_up" href="sign_in.php"> Sign in now </snap> </h5>
                        '; 
                    }
                    else
                    {
                        echo '
                            <div class="error">
                                <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Account Not Activated  </h3>
                            </div>
                        '; 
                    }
                ?>
            </div>
        </div>
    </body>
</html>