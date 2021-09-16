<html>
    <head>
        <link href="style.php" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        
        <div class="search_div">

            <div class="search_input">
                <form method="POST">
                    <input type="text" class= "search" name="search" autocomplete="off" placeholder="Search here..." required autocomplete="off"/>
                </form>
            </div>
            
            <div class="result">
                <?php       
                include 'connection.php';
                    $q = "select * from movies";
                    $query = mysqli_query($conn,$q);

                    while($res = mysqli_fetch_array($query))
                    {
                        echo '<a href="movie_detail.php?id='.$res['ID'].'"> <img src="'.$res['Poster_URL'].'" class="result_poster" alt="..."> </a>';
                    }

                ?>
            </div>
        </div>
    </body>
    
</html>