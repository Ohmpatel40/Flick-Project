<?php 
    $token = $_GET['token'];
?>
<html>
<head>
        <title> </title>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="../Assets/favicon.png" type="image/png">
    </head>
    <body>
        <div class="sign_in">
            <img src="../Assets/login-background.jpg" alt="bg" class="sign_in_bg" />
            <img src="../Assets/Logo.svg" alt="Logo" class="sign_in_logo" />
            <div class="sign_in_form">
                <h1 class="form_head"> Change Password </h1> 
                <?php 
                    include'connection.php';

                    if(isset($_POST['submit']))
                    {
                        $pass = $_POST['pass'];
                        $cpass = $_POST['cpass'];

                        if($pass == $cpass)
                            {
                                $q = "update users set Password = '$pass' where Token = '$token'";
                                $query = mysqli_query($conn,$q);
                                if($query)
                                {
                                    echo "<script>";
                                        echo ("location.href='sign_in.php'");
                                    echo "</script>";
                                }
                            }
                        else
                            {
                                echo '
                                    <div class="error">
                                        <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Password Do Not Match  </h3>
                                    </div>
                                '; 
                            }
                    }
                           
                ?>
                <form method="POST">
                    <input type="password" class= "text email" name="pass" autocomplete="off" placeholder="New Password" required autocomplete="off" autofocus/>
                    <input type="password" class= "text email" name="cpass" autocomplete="off" placeholder="Confirm New Password" required autocomplete="off"/>
                    <button type="submit" class="register_btn change" name="submit" > Change Password </button>
                </form>
            </div>
        </div>
    </body>
</html>