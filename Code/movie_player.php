<?php 
    include 'header.php';
?>
<html>
    <head>
        <link rel="shortcut icon" href="../Assets/favicon.png" type="image/png">
        <link href="style.php" rel="stylesheet">
        <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    </head>
    <body style="overflow-y: hidden;">
    <div class="player_main">
        <div class="movie_title">
            <h1 class="title"> Razzi </h1>
        </div>
        <video id="player" class = "player" playsinline controls>
            <source src="https://flick-project.s3.ap-south-1.amazonaws.com/Raazi_(2018)_Hindi_720p_BluRay_1GB_ESub_.mkv" type="video/mp4" />
        </video>
    </div>
    </body>
</html>