<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Popular on Flick </h3>
            <div class="movie_list" id="movie_list1" onscroll="check1()">
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
                <button class="slide_right" id="slideRight1" > <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft1"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight1 = document.getElementById('slideRight1');
        const buttonLeft1 = document.getElementById('slideLeft1');
        const div1 = document.getElementById('movie_list1');

        buttonRight1.onclick = function ()
        {
            document.getElementById('movie_list1').scrollLeft += 600;
        };
        buttonLeft1.onclick = function () 
        {
            document.getElementById('movie_list1').scrollLeft -= 600;
        };

        function check1()
        {
            if(div1.scrollLeft > 0)
            {
                buttonLeft1.classList.add("visible");
            }
        }
        
        
    </script>
</html>