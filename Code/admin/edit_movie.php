<?php

    include 'connection.php';
    $id = $_GET['id'];

    $q = "select * from movies where ID = '$id'";
    $query = mysqli_query($conn,$q);
    $res = mysqli_fetch_array($query);

    $U = ""; $UA = ""; $A = ""; $S = ""; $not="";
    $hindi = ""; $marathi = ""; $panjabi = ""; $tamil ="";

    if($res['Certificate'] == "U")
    {
        $U = "selected";
    }
    elseif($res['Certificate'] == "U/A")
    {
        $UA = "selected";
    }
    elseif($res['Certificate'] == "A")
    {
        $A = "selected";
    }
    elseif($res['Certificate'] == "S")
    {
        $S = "selected";
    }
    else
    {
        $not = "";
    }

    if($res['Audio'] == "Hindi")
    {
        $hindi = "selected";
    }
    elseif($res['Audio'] == "Marathi")
    {
        $marathi = "Marathi";
    }
    elseif($res['Audio'] == "Panjabi")
    {
        $panjabi = "selected";
    }
    else
    {
        $tamil = "selected";
    }


?>

<?php 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 
    include 'session.php';
 
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
                            $bg = $_POST['movie_bg'];

                             $q = 'update movies set Movie_Name = "'.$name.'" , IMDB = "'.$rating.'" , Duration = "'.$duration.'", Year = "'.$year.'" , Certificate = "'.$certificate.'", Audio = "'.$audio.'", Poster_URL = "'.$poster.'", Movie_URL = "'.$movie.'", Cast = "'.$cast.'", Genres = "'.$genres.'", Plot = "'.$plot.'" , Movie_BG = "'.$bg.'" where ID = "'.$id.'"';

                                    $resp = mysqli_query($conn,$q);
                            if($resp)
                            {
                                echo "<script>";
                                    echo ("location.href='all_movies.php'");
                                echo "</script>";
                            }
                            else
                            {
                                echo "ERROR ERROR";
                            }    

                                   
                                
                        }
                    ?>

                    <!-- Content Row -->
                    <div class="row mt-3 ml-0 mr-0 align-items-center justify-content-around">
                        <form method="POST" style="width: 100%;">
                        
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Movie Name</label>
                                        <input type="text" class="form-control" value="<?php echo $res['Movie_Name'] ?>" required name="name" id="formGroupExampleInput" placeholder="Enter Movie Name" >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">IMDB Rating</label>
                                        <input type="text" class="form-control" value="<?php echo $res['IMDB'] ?>" required name="rating" id="formGroupExampleInput" placeholder="Enter IMDB Rating" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Duration</label>
                                        <input type="text" class="form-control" value="<?php echo $res['Duration'] ?>" required name="duration" id="formGroupExampleInput" placeholder="Enter Duration" readonly >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Year of Release</label>
                                        <input type="text" class="form-control" value="<?php echo $res['Year'] ?>" required name="year" id="formGroupExampleInput" placeholder="Enter Year of Release" >
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
                                            <option value="U" <?php echo $U ?> >U</option>
                                            <option value="U/A" <?php echo $UA ?> >U/A</option>
                                            <option value="A" <?php echo $A ?> >A</option>
                                            <option value="S" <?php echo $S ?> >S</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Audio Language</label>
                                        <select class="form-control" required name="audio" id="exampleFormControlSelect1">
                                            <option value="">Select Audio Language</option>
                                            <option value="Hindi" <?php echo $hindi ?> >Hindi</option>
                                            <option value="Panjabi" <?php echo $panjabi ?> >Panjabi</option>
                                            <option value="Marathi" <?php echo $marathi ?> >Marathi</option>
                                            <option value="Tamil" <?php echo $tamil ?> >Tamil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Poster URL</label>
                                        <input type="text" class="form-control" value="<?php echo $res['Poster_URL'] ?>" required name="poster_url" id="formGroupExampleInput" placeholder="Enter Poster URL" >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Movie URL</label>
                                        <input type="text" class="form-control" value="<?php echo $res['Movie_URL'] ?>" required name="movie_url" id="formGroupExampleInput" placeholder="Enter Movie URL">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Movie Trailer URL</label>
                                        <input type="text" class="form-control" value="<?php echo $res['Movie_BG'] ?>" required name="movie_bg" id="formGroupExampleInput" placeholder="Enter Movie Trailer URL">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cast</label>
                                        <textarea class="form-control" required name="cast" id="exampleFormControlTextarea1" rows="1" placeholder="Enter Cast"><?php echo $res['Cast'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Genres</label>
                                        <textarea class="form-control" required name="genres" id="exampleFormControlTextarea1" rows="1" placeholder="Enter Genres"><?php echo $res['Genres'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Plot</label>
                                        <textarea class="form-control" required name="plot" id="exampleFormControlTextarea1" rows="2" placeholder="Enter Plot"><?php echo $res['Plot'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3" style="margin-left: 30%;">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-success w-25 mr-3" value="Update Movie"/>
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


