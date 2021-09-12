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
        <link href="../Code/admin/css/sb-admin-2.css" rel="stylesheet">
        <link href="style.php" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="logo_menu">
                <img src="../Assets/Logo.svg" alt="Logo" class="header_logo" />
                <div class="menu">
                    <a href="#" class="header_menu"> Movies </a>
                    <a href="#" class="header_menu"> Recently Added </a>
                    <a href="#" class="header_menu"> My List </a>
                </div>
            </div>
                <div class="search">
                    <i class="fas fa-search search_logo"></i>
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