<?php
    $id = $_GET['id'];
    include 'connection.php';
    include 'session.php';
    $q = "select * from movies where ID = '$id'";
    $query = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($query);
    $num = mysqli_num_rows($query);
    $name = $res['Movie_Name'];
    $imdb = $res['IMDB'];
    $duration = $res['Duration'];
    $year = $res['Year'];
    $certificate = $res['Certificate'];
    $plot = $res['Plot'];
    $cast = $res['Cast'];
    $genres = $res['Genres'];
    $audio = $res['Audio'];
?>

<html>
    <head>
        <title> <?php echo $res['Movie_Name']; ?> </title>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php include 'header.php' ?>
        <div class="movie_details">
            <img src="../Assets/movie_detail_bg.jpg" alt="Logo" class="movie_detail_bg" />
            <img src="../Assets/Overlay.png" alt="Logo" class="movie_detail_bg_overlay" />
            <h1 class="movie_name"> <?php echo $name ?> </h1>
            <div class="movie_info">
                <button class="imdb"> <i class="fab fa-imdb imdb_logo"></i> </button>
                <div class="info_div">
                    <h5 class ="info"> <?php echo $imdb ?> </h5>
                    <h5 class ="info"> <?php echo $duration ?> </h5>
                    <h5 class ="info"> <?php echo $year ?> </h5>
                    <h5 class ="info"> <?php echo $certificate ?> </h5>
                </div>
            </div>
            <div class="movie_details_buttons">
                <button class = "play_button"> <i class="fas fa-play"></i> Play  </button>
                <button class="add_button"> <i class="fas fa-plus"></i> </button>
            </div>
            <p class="plot"> <?php echo $plot ?> </p>
            <table class="cast">
                <tr>
                    <td class="white"> Starring</td>
                    <td class="grey"> <?php echo $cast ?></td>
                </tr>
                <tr>
                    <td class="white"> Genres</td>
                    <td class="grey"> <?php echo $genres ?></td>
                </tr>
                <tr>
                    <td class="white"> Audio Language</td>
                    <td class="grey"> <?php echo $audio ?></td>
                </tr>
            </table>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>