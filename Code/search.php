<html>
    <head>
        <link href="style.php" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        
        <div class="search_input">
            <form method="POST">
                <input type="text" class= "text search_movie" name="name" autocomplete="off" placeholder="Search here..." required autocomplete="off" autofocus />
                <button type="submit" class="search_btn" name="search"> <i class="fas fa-search"></i> </button>
            </form>
        </div>

        <?php 
            include 'connection.php';

            if(isset($_POST['search']))
            {
                $name = $_POST['name'];

                $q = "select * from movies where Movie_Name like '%$name%' OR Cast like '%$name%' OR Genres like '%$name%' OR IMDB like '%$name%' OR Plot like '%$name%' ";
                $query = mysqli_query($conn,$q);
                $num = mysqli_num_rows($query);
                echo '
                        <div class="search_div">
                            <div class="result">
                    ';

                if($num > 1)
                {
                    while($res = mysqli_fetch_array($query))
                    {
                        echo '<a href="movie_detail.php?id='.$res['ID'].'"> <img src="'.$res['Poster_URL'].'" class="result_poster" alt="..."> </a>';
                    }
                }
                else
                {
                    echo ' <h1 class="not_found"> No Movie Found!! </h1> ';
                }
                echo '
                            </div>
                        </div>
                    ';
                    
                include 'footer.php';
            }
        ?>
    </body>
    
</html>