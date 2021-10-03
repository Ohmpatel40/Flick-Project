<?php
    include 'connection.php';
    include 'session.php';
    $q = "select * from members where Email='".$_SESSION['email']."' and MID = '".$_SESSION['mid']."'";
    $query = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($query);
    $url = $res['Icon_URL'];
?>

<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="../Code/admin/css/sb-admin-2.css" rel="stylesheet">
        <link href="style.php" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="logo_menu">
                <a href="home.php" > <img src="../Assets/Logo.svg" alt="Logo" class="header_logo" /> </a>
                <div class="menu">
                    <a href="home.php" class="header_menu"> Home </a>
                    <a href="allmovies.php" class="header_menu"> All Movies </a>
                    <a href="mylist_menu.php" class="header_menu"> My List </a>
                </div>
            </div>
                <div class="search">
                    <a href="search.php" > <i class="fas fa-search search_logo"></i> </a>
                    <div class=" dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo $url ?>" class="user_logo">
                        </a>
                        <ul class="dropdown-menu mt-3" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item font-weight-bolder text-md"> <?php  echo $res['Name'] ?> </a>
                            <a class="dropdown-item text-md" href="index.php">
                                Profiles
                            </a>
                            <a class="dropdown-item text-md" href="#">
                                Help Center
                            </a>
                            <a class="dropdown-item text-md" href="signout.php">
                                Signout
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
    </body>
</html>