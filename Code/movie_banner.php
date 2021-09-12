<?php 
    include 'connection.php';
    $q = "select * from banner";
    $query = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($query);
    $url = "./banner/".$res['Banner_Image'];
?>

<html>
<head>
    </head>
    <body>
        <div class="main_banner">
                <img src="./banner/<?php echo $res['Banner_Image'] ?>" alt="Logo" class="movie_banner" />
                <img src="../Assets/Movie_banner_Overlay.png" alt="Logo" class="movie_banner_overlay" />
                <div class="buttons">
                <a class="banner_link_movie" href="movie_detail.php?id=<?php echo $res['ID'] ?>"> <div class="btn_play"> <i class="fas fa-play banner_play"></i> Play </div> </a>
                <a class="add" href="add_mylist.php?id=<?php echo $res['ID'] ?>"> <div class="btn_play mylist"> <i class="fas fa-plus banner_plus"></i> My List </div> </a>
                </div>
         </div>
    </body>
</html>