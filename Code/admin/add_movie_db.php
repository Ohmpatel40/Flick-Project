<?php

    include 'connection.php';
    include 'session.php';
    $id = $_GET['id'];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://imdb-internet-movie-database-unofficial.p.rapidapi.com/film/$id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: imdb-internet-movie-database-unofficial.p.rapidapi.com",
            "x-rapidapi-key: 31afc35303mshb509b663c116881p13a3e0jsned9cddabac38"
        ],
    ]);

    $response = curl_exec($curl);
    $res = json_decode($response,true);
    $err = curl_error($curl);

    curl_close($curl);

    $actors = array();

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        if($res['title'] != "")
        {
            foreach($res['cast'] as $row => $actor)
            {
                if($row < 6)
                $actors[] = $actor['actor'];
            }

            $cast = implode(", ",$actors);
        }
        else
        {
            echo '
                <div class="alert alert-danger col-12 text-center text-lg " role="alert">
                    <i class="fas fa-times-circle "></i> Movie not found!!!
                </div>
            ';
        }
    }


?>

<?php 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 
 
 ?>
 
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'includes/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800">Movie Details</h1>
                    </div>
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $name = $_POST['name'];
                            $rating = $_POST['rating'];
                            $duration = $_POST['duration'];
                            $year = $_POST['year'];
                            $certificate = $_POST['certificate'];
                            $audio = $_POST['audio'];
                            $poster = $_POST['poster_url'];
                            $movie = $_POST['movie_url'];
                            $cast = $_POST['cast'];
                            $genres = $_POST['genres'];
                            $plot = $_POST['plot'];

                            if($_FILES['movie_image']['type'] == "image/jpeg" or $_FILES['movie_image']['type'] == "image/jpg" or $_FILES['movie_image']['type'] == "image/png")
                            {
                                $fileinfo = getimagesize($_FILES['movie_image']['tmp_name']);
                                if($fileinfo[0] == "1540" && $fileinfo[1] == "430")
                                {
                                    $image_name = $_FILES['movie_image']['name'];

                                    $q = 'insert into movies(ID,Movie_Name,Cast,Genres,Plot,IMDB,Duration,Year,Certificate,Audio,Poster_URL,Movie_URL,Movie_BG) values ("'.$id.'","'.$name.'","'.$cast.'","'.$genres.'","'.$plot.'","'.$rating.'","'.$duration.'","'.$year.'","
                                    '.$certificate.'","'.$audio.'","'.$poster.'","'.$movie.'","'.$image_name.'")';

                                    $resp = mysqli_query($conn,$q);

                                    if($resp)
                                    {
                                        move_uploaded_file($_FILES['movie_image']['tmp_name'],"../moviebg/".$_FILES['movie_image']['name']);    
                                        echo "<script>";
                                            echo ("location.href='all_movies.php'");
                                        echo "</script>";
                                    }
                                    else
                                    {
                                        echo "ERROR ERROR";
                                    }
                                }
                                else
                                {
                                    echo '
                                    <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                        <i class="fas fa-times-circle "></i> Image dimension should be 1540 X 430
                                    </div>
                                    ';
                                }
                            }
                            else
                            {
                                echo '
                                    <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                        <i class="fas fa-times-circle "></i> Select .jpeg , .jpg , .png files only!!!
                                    </div>
                                ';  
                            }
                        }
                    ?>
                    <!-- Content Row -->
                    <div class="row mt-3 ml-0 mr-0 align-items-center justify-content-around">
                        <form method="POST" enctype="multipart/form-data" style="width: 100%;">
                        
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Movie Name</label>
                                        <input type="text" class="form-control" value="<?php echo $res['title'] ?>" required name="name" id="formGroupExampleInput" placeholder="Enter Movie Name" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">IMDB Rating</label>
                                        <input type="text" class="form-control" value="<?php echo $res['rating'] ?>" required name="rating" id="formGroupExampleInput" placeholder="Enter IMDB Rating" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Duration</label>
                                        <input type="text" class="form-control" value="<?php echo $res['length'] ?>" required name="duration" id="formGroupExampleInput" placeholder="Enter Duration" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Year of Release</label>
                                        <input type="text" class="form-control" value="<?php echo $res['year'] ?>" required name="year" id="formGroupExampleInput" placeholder="Enter Year of Release" readonly>
                                    </div>
                                </div>
                                <script src="js/yearpicker.js"></script>
                                <script>
                                    $('.yearpicker').yearpicker()
                                </script>
                            </div>
                            <div class="row mb-0">
                            
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Certificate</label>
                                        <select class="form-control" required name="certificate" id="exampleFormControlSelect1">
                                            <option value="">Select Certificate</option>
                                            <option value="U">U</option>
                                            <option value="U/A">U/A</option>
                                            <option value="A">A</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Audio Language</label>
                                        <select class="form-control" required name="audio" id="exampleFormControlSelect1">
                                            <option value="">Select Audio Language</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Panjabi">Panjabi</option>
                                            <option value="Marathi">Marathi</option>
                                            <option value="Tamil">Tamil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Poster URL</label>
                                        <input type="text" class="form-control" value="<?php echo $res['poster'] ?>" required name="poster_url" id="formGroupExampleInput" placeholder="Enter Poster URL" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Movie URL</label>
                                        <input type="text" class="form-control" required name="movie_url" id="formGroupExampleInput" placeholder="Enter Movie URL">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Movie Image</label>
                                        <input type="file" class="form-control-file" required name="movie_image" id="formGroupExampleInput" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cast</label>
                                        <textarea class="form-control"  required name="cast" id="exampleFormControlTextarea1" rows="1" placeholder="Enter Cast"><?php echo $cast ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Genres</label>
                                        <textarea class="form-control" required name="genres" id="exampleFormControlTextarea1" rows="1" placeholder="Enter Genres"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Plot</label>
                                        <textarea class="form-control" required name="plot" id="exampleFormControlTextarea1" rows="2" placeholder="Enter Plot"><?php echo $res['plot'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3" style="margin-left: 30%;">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-success w-25 mr-3" value="Add Movie"/>
                                        <a href="add_movie.php" class="btn btn-secondary w-25">Cancle</a>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'includes/script.php'; 
    include 'includes/footer.php';  
 ?>


