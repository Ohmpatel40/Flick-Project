<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Crime Movies </h3>
            <div class="movie_list" id="movie_list8" onscroll="check()">
            <?php 
                 include 'connection.php';
                 $q = "select * from movies where Genres like '%crime%' limit 15";
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
                <button class="slide_right" id="slideRight8"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft8"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight8 = document.getElementById('slideRight8');
        const buttonLeft8 = document.getElementById('slideLeft8');
        const div8 = document.getElementById('movie_list8');

        buttonRight8.onclick = function ()
        {
            document.getElementById('movie_list8').scrollLeft += 600;
        };
        buttonLeft8.onclick = function () 
        {
            document.getElementById('movie_list8').scrollLeft -= 600;
        };

        function check()
        {
            if(div8.scrollLeft > 0)
            {
                buttonLeft8.classList.add("visible");
            }
        }
        
    </script>
</html>