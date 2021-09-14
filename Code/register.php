<?php 

    session_start();
?>
<html>
    <head>
        <title> Register </title>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="../Assets/favicon.png" type="image/png">
    </head>
    <body>
        <div class="register">
            <img src="../Assets/login-background.jpg" alt="bg" class="sign_in_bg" />
            <img src="../Assets/Logo.svg" alt="Logo" class="sign_in_logo" />
            <div class="register_form">
                <h1 class="form_head"> Register </h1> 
                <?php 
                    include 'connection.php';

                    if(isset($_POST['submit']))
                    {
                        $first = $_POST['first'];
                        $last = $_POST['last'];
                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        $cpass = $_POST['cpassword'];
                        $username = $first ." ". $last;
                        $token = bin2hex(random_bytes(15));
                        $uid = bin2hex(random_bytes(5));

                        $q = "select * from users where Email = '$email'";
                        $query = mysqli_query($conn,$q);
                        $num = mysqli_num_rows($query);

                        if($num > 1)
                        {
                            echo '
                            <div class="error">
                                <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Email already registered! </h3>
                            </div>
                            '; 
                        }
                        else
                        {
                            if($pass == $cpass)
                            {
                                $subject = 'Email Activation';
                                $body = 'Hi '.$username.'! Click on the link to activate your account: http://localhost/flick%20Project/Code/activate.php?token='.$token;
                                $headers = 'From: ohm.flick@gmail.com';

                                if(mail($email,$subject,$body,$headers))
                                {
                                    $q = "insert into users (UID,Email,Username,Password,Token) values ('$uid','$email','$username','$pass','$token')";
                                    $query = mysqli_query($conn,$q);
                                    if($query)
                                    {
                                        $_SESSION['message'] = "Verification mail has been sent to ". $email;
                                        echo "<script>";
                                            echo ("location.href='sign_in.php'");
                                        echo "</script>";
                                    }
                                    else
                                    {
                                        echo '
                                        <div class="error">
                                            <h3 class="message"> <i class="fas fa-exclamation-circle"></i> User not registered!  </h3>
                                        </div>
                                        '; 
                                    }
                                }
                                else
                                {
                                    echo '
                                    <div class="error">
                                        <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Fail to send Email! </h3>
                                    </div>
                                    '; 
                                }
                                
                            }
                            else
                            {
                                echo '
                                <div class="error">
                                    <h3 class="message"> <i class="fas fa-exclamation-circle"></i> Password does not match!  </h3>
                                </div>
                                ';   
                            }
                        }
                    }
                    
                ?>
                <form method="POST">
                    <div class="group">
                        <input type="text" class= "text" name="first" autocomplete="off" placeholder="First Name" required autocomplete="off"/>
                        <input type="text" class= "text" name="last" autocomplete="off" placeholder="Last Name" required autocomplete="off"/>
                    </div>
                    <div class="email">
                        <input type="email" class= "text email" name="email" autocomplete="off" placeholder="Email" required autocomplete="off"/>
                    </div>
                    <div class="group">
                        <input type="password" class= "text" name="password" autocomplete="off" placeholder="Password" required autocomplete="off"/>
                        <input type="password" class= "text" name="cpassword" autocomplete="off" placeholder="Confirm Password" required autocomplete="off"/>
                    </div>
                    <button type="submit" class="register_btn" name="submit" > Register </button>
                </form>
                <h5 class="need_help"> Need Help? </h5>
                <h5 class="new_user"> Already on Flick? <a class="sign_up" href="sign_in.php"> Sign In now </a> </h5>
            </div>
        </div>
    </body>
</html>