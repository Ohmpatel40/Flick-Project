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
                        <h1 class="h3 mb-0 text-gray-800">Add Movie</h1>
                    </div>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 w-50 navbar-search" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control  border border-primary small" name="search" placeholder="Movie Name here..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Content Row -->
                    <div class="row align-items-center justify-content-around mt-3 ml-0">

                        <?php

                        if(isset($_POST['submit']))
                        {
                            $curl = curl_init();
                            $search = $_POST['search'];

                            curl_setopt_array($curl, [
                                CURLOPT_URL => "https://imdb8.p.rapidapi.com/auto-complete?q=$search",
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HTTPHEADER => [
                                    "x-rapidapi-host: imdb8.p.rapidapi.com",
                                    "x-rapidapi-key: 31afc35303mshb509b663c116881p13a3e0jsned9cddabac38"
                                ],
                            ]);

                            $response = curl_exec($curl);
                            $err = curl_error($curl);
                            $res = json_decode($response,true);
                            curl_close($curl);

                            if ($err) {
                                echo "cURL Error #:" . $err;
                            } else {
                                if(count($res) > 2 )
                                {
                                    foreach($res['d'] as $row => $movie)
                                    {
                                        if(count($movie) > 6 )
                                        {
                                            echo '
                                                <div class="card mr-0 mb-4 mr-3" style="width: 190px; height: 350px;">
                                                    <img src=" '.$movie['i']['imageUrl'].' " class="card-img-top" style="height: 207px;" alt="...">
                                                    <div class="card-body ">
                                                        <div style="height: 60px;">
                                                            <h6 class="card-title text-center text-dark">'.$movie['l'].'</h6>
                                                        </div>
                                                        <div class="d-sm-flex align-items-center justify-content-around">
                                                            <a href="add_movie_db.php?id='.$movie['id'].'" class="btn btn-success" style="width: 8rem;"> <i class="fas fa-plus"></i> Add</a>
                                                        </div>
                                                    </div>
                                                </div>          
                                            ';
                                        }
                                    }
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
                        }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'includes/script.php'; 
    include 'includes/footer.php'; 
 
 ?>


