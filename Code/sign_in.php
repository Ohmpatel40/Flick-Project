<?php 
    session_start();
?>
<html>
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
                <h1 class="form_head"> Sign In </h1> 
                <?php 
                    include'connection.php';
                    if($_SESSION['message'] != "")
                    {
                        echo '
                            <div class="error success">
                                <h3 class="message" style = "font-size: 15px;"> <i class="fas fa-check-circle"></i> &nbsp '.$_SESSION["message"] .' </h3>
                            </div>
                        '; 
                        $_SESSION['message'] = "";
                        
                    }

                    if(isset($_POST['submit']))
                    {
                        $email = $_POST['email'];
                        $pass = $_POST['password'];

                        $q = "select * from users where Email = '$email'";
                        $query = mysqli_query($conn,$q);
                        $num = mysqli_num_rows($query);
                        $res = mysqli_fetch_array($query);

                        if($num)
                        {
                            if($res['Status'] == 'Active')
                            {
                                if($pass == $res['Password'])
                                {
                                    $_SESSION['email'] = $email;
                                    $_SESSION['username'] = $res['Username'];
                                    echo "<script>";
                                        echo ("location.href='index.php'");
                                    echo "</script>";
                                }
                                else
                                {
                                    echo '
                                    <div class="error">
                                        <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Invalid Password!  </h3>
                                    </div>
                                    '; 
                                }
                            }
                            else
                            {
                                echo '
                                <div class="error">
                                    <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Email not activated!  </h3>
                                </div>
                                '; 
                            }
                        }
                        else
                        {
                            echo '
                                <div class="error">
                                    <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Invalid Email!  </h3>
                                </div>
                            '; 
                        }

                    }
                ?>
                <form method="POST">
                    <input type="email" class= "text email" name="email" autocomplete="off" placeholder="Email" required autocomplete="off"/>
                    <input type="password" class= "text email" name="password" autocomplete="off" placeholder="Password" required autocomplete="off"/>
                    <button type="submit" class="register_btn" name="submit" > Sign In </button>
                </form>
                <h5 class="need_help"> Need Help? </h5>
                <h5 class="new_user"> New on Flick? <span class="sign_up"> Sign up now </snap> </h5>
            </div>
        </div>
    </body>
</html>