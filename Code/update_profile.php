<?php
    include 'connection.php';
    $ids = $_GET['id']; 
    $q = "select * from members where ID = $ids";
    $execute = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($execute);

?>

<html>
<head>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>


    </head>
    <body>
        <div class="whos_watching">
            <img src="../Assets/Logo.svg" alt="Logo" class="sign_in_logo" />     
            <div class="new_center_div">
                <h1 class="new_user_head"> Edit Profile</h1>
                <div class="all_user_icon">
                    <h6 class="select_icon"> Select Icon</h6>
                    <form method="POST" class="new_user_form" >
                    <ul>
                        <li>
                            <input type="radio" id="cb1" name="icon" value="../Users/Professor.png" required/>
                            <label for="cb1"><img src="../Users/Professor.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb2" name="icon" value="../Users/Lisboa.png" />
                            <label for="cb2"><img src="../Users/Lisboa.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb3" name="icon" value="../Users/Helsinki.png" />
                            <label for="cb3"><img src="../Users/Helsinki.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb4" name="icon" value="../Users/Tokio.png" />
                            <label for="cb4"><img src="../Users/Tokio.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb5" name="icon" value="../Users/Denver.png" />
                            <label for="cb5"><img src="../Users/Denver.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb6" name="icon" value="../Users/Berlin.png" />
                            <label for="cb6"><img src="../Users/Berlin.png" /></label>
                        </li>
                    </ul>
                    <ul class="second">
                        <li>
                            <input type="radio" id="cb7" name="icon" value="../Users/Palermo.png" />
                            <label for="cb7"><img src="../Users/Palermo.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb8" name="icon" value="../Users/Rio.png" />
                            <label for="cb8"><img src="../Users/Rio.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb9" name="icon" value="../Users/Stockholm.png" />
                            <label for="cb9"><img src="../Users/Stockholm.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb10" name="icon" value="../Users/Bogota.png" />
                            <label for="cb10"><img src="../Users/Bogota.png" /></label>
                        </li>
                        <li>
                            <input type="radio" id="cb11" name="icon" value="../Users/Police.png" />
                            <label for="cb11"><img src="../Users/Police.png" /></label>
                        </li>
                    </ul>
                </div>
                <h6 class="select_icon"> Enter Name</h6> 
                    <input type="text" class="new_user_name"  value=" <?php echo $res['Name'] ?> " placeholder="Enter Name" name="name" autocomplete="off" required/>
                    <div class="btns">
                        <input type="submit" class="new_user_btn" name="add_user" value="Edit Profile" />
                        <i href="delete_profile.php?id=$ids" > <button class="delete_user_btn" name="add_user" > Delete Profile </button> </i>
                    </div>
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST['add_user']))
            {
                $URL = $_POST['icon'];
                $name = $_POST['name'];

                if(isset($_POST['icon']))
                {
                    $q = "update members set Icon_URL = '$URL' , Name = '$name' where ID = $ids";
                    
                }
                else
                {
                    $q = "update members set Name = '$name' where ID = $ids";
                }
                $execute = mysqli_query($conn,$q);

                if($execute)
                {
                    echo "<script>";
                        echo ("location.href='index.php'");
                    echo "</script>";
                }
            }
        ?>
    </body>
</html>