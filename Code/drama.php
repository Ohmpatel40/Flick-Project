<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Dramas </h3>
            <div class="movie_list" id="movie_list9" onscroll="check()">
            <?php 
                 include 'connection.php';
                 $q = "select * from movies where Genres like '%drama%' limit 15";
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
                <button class="slide_right" id="slideRight9"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft9"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight9 = document.getElementById('slideRight9');
        const buttonLeft9 = document.getElementById('slideLeft9');
        const div9 = document.getElementById('movie_list9');

        buttonRight9.onclick = function ()
        {
            document.getElementById('movie_list9').scrollLeft += 600;
        };
        buttonLeft9.onclick = function () 
        {
            document.getElementById('movie_list9').scrollLeft -= 600;
        };

        function check()
        {
            if(div9.scrollLeft > 0)
            {
                buttonLeft9.classList.add("visible");
            }
        }
        
    </script>
</html>