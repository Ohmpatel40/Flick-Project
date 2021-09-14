<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Popular on Flick </h3>
            <div class="movie_list" id="movie_list3" onscroll="check3()">
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
                <button class="slide_right" id="slideRight3" > <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft3"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight3 = document.getElementById('slideRight3');
        const buttonLeft3 = document.getElementById('slideLeft3');
        const div3 = document.getElementById('movie_list3');

        buttonRight3.onclick = function ()
        {
            document.getElementById('movie_list3').scrollLeft += 600;
        };
        buttonLeft3.onclick = function () 
        {
            document.getElementById('movie_list3').scrollLeft -= 600;
        };

        function check3()
        {
            if(div3.scrollLeft > 0)
            {
                buttonLeft3.classList.add("visible");
            }
        }
        
        
    </script>
</html>