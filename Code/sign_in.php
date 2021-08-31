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
                <form method="POST">
                    <div class = "inputbox">
                        <input type="text" class= "inputfield" name="username" autocomplete="off" required/>
                        <label class="input_label"> Enter Username </label>
                    </div>
                    <div class = "inputbox">
                        <input type="password" class= "inputfield" name="password" autocomplete="off" required/>
                        <label class="input_label"> Enter Password </label>
                    </div>
                    <input type="submit" class="sign_in_btn" name="sign_in" value="Sign In" />
                </form>
                <h5 class="need_help"> Need Help? </h5>
                <h5 class="new_user"> New on Flick? <span class="sign_up"> Sign up now </snap> </h5>
            </div>
        </div>
    </body>
</html>