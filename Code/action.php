<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Get In On the Action </h3>
            <div class="movie_list" id="movie_list6" onscroll="check6()">
            <?php 
                 include 'connection.php';
                 $q = "select * from movies where Genres like '%Action%' limit 15";
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
                <button class="slide_right" id="slideRight6"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft6"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight6 = document.getElementById('slideRight6');
        const buttonLeft6 = document.getElementById('slideLeft6');
        const div6 = document.getElementById('movie_list6');

        buttonRight6.onclick = function ()
        {
            document.getElementById('movie_list6').scrollLeft += 600;
        };
        buttonLeft6.onclick = function () 
        {
            document.getElementById('movie_list6').scrollLeft -= 600;
        };

        function check6()
        {
            if(div6.scrollLeft > 0)
            {
                buttonLeft6.classList.add("visible");
            }
        }
        
    </script>
</html>