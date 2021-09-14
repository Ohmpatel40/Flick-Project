<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Crime Movies </h3>
            <div class="movie_list" id="movie_list7" onscroll="check7()">
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
                <button class="slide_right" id="slideRight7"> <i class="fas fa-chevron-right"> </i> </button>
            </div>
            <div class="previous">
                <button class="slide_left" id="slideLeft7"> <i class="fas fa-chevron-left"> </i> </button>
            </div>
        </div>
    </body>
    <script>
        const buttonRight7 = document.getElementById('slideRight7');
        const buttonLeft7 = document.getElementById('slideLeft7');
        const div7 = document.getElementById('movie_list7');

        buttonRight7.onclick = function ()
        {
            document.getElementById('movie_list7').scrollLeft += 600;
        };
        buttonLeft7.onclick = function () 
        {
            document.getElementById('movie_list7').scrollLeft -= 600;
        };

        function check7()
        {
            if(div7.scrollLeft > 0)
            {
                buttonLeft7.classList.add("visible");
            }
        }
        
    </script>
</html>