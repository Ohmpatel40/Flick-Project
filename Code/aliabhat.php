<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Best of Alia Bhat </h3>
            <div class="movie_list" id="movie_list5" onscroll="check5()">
            <?php 
                 include 'connection.php';
                 $q = "select * from movies where Cast like '%Alia Bhat%' limit 15";
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
                <button class="slide_right" id="slideRight5"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft5"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight5 = document.getElementById('slideRight5');
        const buttonLeft5 = document.getElementById('slideLeft5');
        const div5 = document.getElementById('movie_list5');

        buttonRight5.onclick = function ()
        {
            document.getElementById('movie_list5').scrollLeft += 600;
        };
        buttonLeft5.onclick = function () 
        {
            document.getElementById('movie_list5').scrollLeft -= 600;
        };

        function check5()
        {
            if(div5.scrollLeft > 0)
            {
                buttonLeft5.classList.add("visible");
            }
        }
        
    </script>
</html>