<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php include 'header.php' ?>
        <div class="movie_details">
            <img src="../Assets/movie_detail_bg.jpg" alt="Logo" class="movie_detail_bg" />
            <img src="../Assets/Overlay.png" alt="Logo" class="movie_detail_bg_overlay" />
            <h1 class="movie_name">Yeh Jawaani Hai Deewani</h1>
            <div class="movie_info">
                <button class="imdb"> <i class="fab fa-imdb imdb_logo"></i> </button>
                <div class="info_div">
                    <h5 class ="info"> 8.0 </h5>
                    <h5 class ="info"> 2h 40 min </h5>
                    <h5 class ="info"> 2013 </h5>
                    <h5 class ="info"> U/A 13+ </h5>
                </div>
            </div>
            <div class="movie_details_buttons">
                <button class = "play_button"> <i class="fas fa-play"></i> Play  </button>
                <button class="add_button"> <i class="fas fa-plus"></i> </button>
            </div>
            <p class="plot">
                Kabir and Naina bond during a trekking trip. 
                Before Naina can express herself, Kabir leaves 
                India to pursue his career. They meet again 
                years later, but he still cherishes his dreams
                more than bonds.
            </p>
            <table class="cast">
                <tr>
                    <td class="white"> Starring</td>
                    <td class="grey"> Ranbir Kapoor, Deepika Padukon, Aditya Roy Kapoor</td>
                </tr>
                <tr>
                    <td class="white"> Genres</td>
                    <td class="grey"> Romance, International, Drama</td>
                </tr>
                <tr>
                    <td class="white"> Audio Language</td>
                    <td class="grey"> Hindi</td>
                </tr>
            </table>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>