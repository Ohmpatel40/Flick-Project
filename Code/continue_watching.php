<html>
<head>
        <link rel="stylesheet" href="style.php" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Continue watching </h3>
            <div class="movie_list" id="movie_list" onscroll="check()">
                <img src="../Posters/Tamasha.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Chhapaak.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Happy New Year.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Padmaavat.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Bajirao Mastani.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Housefull.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Love Aaj Kal.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Om shanti om.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Happy New Year.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Padmaavat.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Bajirao Mastani.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Housefull.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Love Aaj Kal.jpg" alt="Logo" class="movie_poster" />
                <img src="../Posters/Om shanti om.jpg" alt="Logo" class="movie_poster" />
            </div>
            <div class="next">
                <button class="slide_right" id="slideRight"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight = document.getElementById('slideRight');
        const buttonLeft = document.getElementById('slideLeft');
        const div = document.getElementById('movie_list');

        buttonRight.onclick = function ()
        {
            document.getElementById('movie_list').scrollLeft += 600;
        };
        buttonLeft.onclick = function () 
        {
            document.getElementById('movie_list').scrollLeft -= 600;
        };

        function check()
        {
            if(div.scrollLeft > 0)
            {
                buttonLeft.classList.add("visible");
            }
        }
        
    </script>
</html>