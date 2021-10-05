<html>
<head>
    </head>
    <body>
        <?php 
            include 'connection.php';
            $q = "select * from mylist where MID='".$_SESSION['mid']."' and Email = '".$_SESSION['email']."'";
            $query = mysqli_query($conn,$q);
            $num = mysqli_num_rows($query);

            if($num)
            {

                echo '  <div class="list">
                        <h3 class="list_title"> My List </h3>
                        <div class="movie_list" id="movie_list1" onscroll="check()"> ';

                    while($res = mysqli_fetch_array($query))
                    {
                        
                        $q1 = "select * from movies where ID = '".$res['ID']."'";
                        $query1 = mysqli_query($conn,$q1); 
                        $res1 = mysqli_fetch_array($query1);
    
                        echo '
                            <a href="movie_detail.php?id='.$res1['ID'].'"> <img src="'.$res1['Poster_URL'].'" alt="Logo" class="movie_poster" /> </a>
                        ';
                    }
                    
                echo '</div>
                        <div class="next">
                            <button class="slide_right" id="slideRight1"> <i class="fas fa-chevron-right"> </i> </button>
                        </div>
                        <div class="previous">
                            <button class="slide_left" id="slideLeft1"> <i class="fas fa-chevron-left"> </i> </button>
                        </div>
                    </div>';
            } 
        ?>
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

        function check()
        {
            if(div1.scrollLeft > 0)
            {
                buttonLeft1.classList.add("visible");
            }
        }
        
    </script>
</html>