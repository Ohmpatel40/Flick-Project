<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Comedies </h3>
            <div class="movie_list" id="movie_list4" onscroll="check4()">
            <?php 
                 include 'connection.php';
                 $q = "select * from movies where Genres like '%Comedy%' order by rand() limit 15";
                 $query = mysqli_query($conn,$q);
                 
                 while($res = mysqli_fetch_array($query))
                {
                   echo '
                    <a href="movie_detail.php?id='.$res['ID'].'"> <img src="'.$res['Poster_URL'].'" alt="Logo" class="movie_poster" /> </a>
                   ';
                }
            ?>
            </div>
            <div class="next">
                <button class="slide_right" id="slideRight4"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft4"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight4 = document.getElementById('slideRight4');
        const buttonLeft4 = document.getElementById('slideLeft4');
        const div4 = document.getElementById('movie_list4');

        buttonRight4.onclick = function ()
        {
            document.getElementById('movie_list4').scrollLeft += 600;
        };
        buttonLeft4.onclick = function () 
        {
            document.getElementById('movie_list4').scrollLeft -= 600;
        };

        function check4()
        {
            if(div4.scrollLeft > 0)
            {
                buttonLeft4.classList.add("visible");
            }
        }
        
    </script>
</html>