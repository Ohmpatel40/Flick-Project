<html>
<head>
    </head>
    <body>
        <div class="list">
            <h3 class="list_title"> Top 10 in India today </h3>
            <div class="movie_list" id="movie_list3" onscroll="check3()">
                
                    <?php 
                        include 'connection.php';
                        $q = "select * from top10";
                        $query = mysqli_query($conn,$q);
                        $first = ""; $last = "";

                        while($res = mysqli_fetch_array($query))
                        {   
                            if($res['Rank'] == 1)
                            {
                                echo '
                                <div class="top_list">
                                    <h1 class="rank">'.$res['Rank'].'</h1>
                                    <a href = "movie_detail.php?id='.$res['ID'].'" > <img src="'.$res['Poster_URL'].'" alt="Logo" class="top_poster first" /> </a>
                                </div>
                                ';  
                            }
                            elseif($res['Rank'] == 10)
                            {
                                echo '
                                <div class="top_list">
                                    <h1 class="rank">'.$res['Rank'].'</h1>
                                    <a href = "movie_detail.php?id='.$res['ID'].'" > <img src="'.$res['Poster_URL'].'" alt="Logo" class="top_poster last" /> </a>
                                </div>
                                '; 
                            }
                            else
                            {
                                echo '
                                <div class="top_list">
                                    <h1 class="rank">'.$res['Rank'].'</h1>
                                    <a href = "movie_detail.php?id='.$res['ID'].'" > <img src="'.$res['Poster_URL'].'" alt="Logo" class="top_poster" /> </a>
                                </div>
                                '; 
                            }

                            
                        }
                    ?>
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