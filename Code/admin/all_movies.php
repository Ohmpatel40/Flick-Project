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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Movies</h1>
                        <div class="float-right">
                            <a href="add_movie.php" class="btn btn-success w-100"> <i class="fas fa-plus"></i> Add Movie</a>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row align-items-center justify-content-center">

                    <?php

                        include 'connection.php';
                        $q = "select * from movies";
                        $query = mysqli_query($conn,$q);

                        while($res = mysqli_fetch_array($query))
                        {
                           echo ' <div class="card mr-4 mb-4" style="width: 180px;">
                            <img src="'.$res['Poster_URL'].'" class="card-img-top" style="height: 207px;" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title text-center text-dark" style="height: 50px;">'.$res['Movie_Name'].'</h6>
                                    <div class="d-sm-flex align-items-center justify-content-around">
                                        <a href="edit_movie.php?id='.$res['ID'].'" class="btn btn-primary" style="width: 4rem;"> <i class="fas fa-pencil-alt"></i></a>
                                        <a href="delete_movie.php?id='.$res['ID'].'" class="btn btn-danger" style="width: 4rem;"> <i class="fas fa-trash"></i> </a>
                                    </div>
                                </div>
                            </div> ';
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


