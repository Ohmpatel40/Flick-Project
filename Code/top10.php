<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Top 10 in India today </h3>
            <div class="movie_list" id="movie_list3" onscroll="check3()">
                <div class="top_list">
                    <h1 class="rank">1</h1>
                    <img src="../Posters/HSKD.jpg" alt="Logo" class="top_poster first" />
                </div>
                <div class="top_list">
                    <h1 class="rank">2</h1>
                    <img src="../Posters/Dear Zindagi.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">3</h1>
                    <img src="../Posters/Raazi.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">4</h1>
                    <img src="../Posters/Gully Boy.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">5</h1>
                    <img src="../Posters/2 States.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">6</h1>
                    <img src="../Posters/BKD.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">7</h1>
                    <img src="../Posters/Kapoor and Sons.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">9</h1>
                    <img src="../Posters/SOTY.jpg" alt="Logo" class="top_poster" />
                </div>
                <div class="top_list">
                    <h1 class="rank">10</h1>
                    <img src="../Posters/2 States.jpg" alt="Logo" class="top_poster last" />
                </div>
            </div>
            <div class="next_top">
                <button class="slide_right_top" id="slideRight3"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous_top">
                <button class="slide_left_top" id="slideLeft3"> <i class="fas fa-chevron-left"> </i> </button>
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
                console.log("SCROLL");
                buttonLeft3.classList.add("show");
            }
        }
        
    </script>
</html>