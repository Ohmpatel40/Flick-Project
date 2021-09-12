<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> My List </h3>
            <div class="movie_list" id="movie_list7" onscroll="check()">
            <?php 
                include 'connection.php';
                echo $q = "select * from mylist where MID='".$_SESSION['mid']."' and Email = '".$_SESSION['email']."'";
                $query = mysqli_query($conn,$q);
                $res = mysqli_fetch_array($query);
                print_r($res);

                 /*
                 while($res = mysqli_fetch_array($query))
                {
                    
                    $q = "select * from movies where ID = '".$res['ID']."'";
                    $query = mysqli_query($conn,$q); 
                    $res = mysqli_fetch_array($query);

                    echo '
                        <a href="movie_detail.php?id='.$res['ID'].'"> <img src="'.$res['Poster_URL'].'" alt="Logo" class="movie_poster" /> </a>
                    ';
                }*/
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
            document.getElementById('movie_list7').scrollLeft += 700;
        };
        buttonLeft7.onclick = function () 
        {
            document.getElementById('movie_list7').scrollLeft -= 700;
        };

        function check()
        {
            if(div7.scrollLeft > 0)
            {
                buttonLeft7.classList.add("visible");
            }
        }
        
    </script>
</html>