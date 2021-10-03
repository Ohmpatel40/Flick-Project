<html>
    <head>
        <link href="style.php" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>

        <h1 style="text-align: center;"> MyList </h1>

        <?php 
            include 'connection.php';

            $q = "select * from mylist where MID='".$_SESSION['mid']."' and Email = '".$_SESSION['email']."'";
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
                        
                        $q1 = "select * from movies where ID = '".$res['ID']."'";
                        $query1 = mysqli_query($conn,$q1); 
                        $res1 = mysqli_fetch_array($query1);
    
                        echo '
                            <a href="movie_detail.php?id='.$res1['ID'].'"> <img src="'.$res1['Poster_URL'].'" alt="Logo" class="result_poster" /> </a>
                        ';
                    }
                }
                else
                {
                    echo ' <h1 class="not_found"> No Movie Found in MyList!! </h1> ';
                }
                echo '
                            </div>
                        </div>
                    ';
            include 'footer.php';
        ?>
    </body>
    
</html>