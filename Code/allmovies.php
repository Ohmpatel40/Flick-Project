<html>
    <head>
        <link href="style.php" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>

        <h1 style="text-align: center;"> All Movies </h1>

        <?php 
            include 'connection.php';

            $q = "select * from movies";
            $query = mysqli_query($conn,$q);
            $num = mysqli_num_rows($query);
            echo '
                <div class="search_div">
                    <div class="result">
                    ';

			if($query)
			{
				while($res = mysqli_fetch_array($query))
					{
						echo '<a href="movie_detail.php?id='.$res['ID'].'"> <img src="'.$res['Poster_URL'].'" class="result_poster" alt="..."> </a>';
					}
			}
            echo '
                    </div>
                </div>
                    ';
            include 'footer.php';
        ?>
    </body>
    
</html>