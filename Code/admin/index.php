 <?php 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 
    include 'session.php';

    include 'connection.php';
    $q = "select * from movies";
    $query = mysqli_query($conn,$q);
    $num_movies = mysqli_num_rows($query);

    $q = "select * from users where Status = 'Active'";
    $query = mysqli_query($conn,$q);
    $active = mysqli_num_rows($query);

    $q = "select * from users where Status = 'Inactive'";
    $query = mysqli_query($conn,$q);
    $inactive = mysqli_num_rows($query);
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row align-items-center justify-content-center">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Movies</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $num_movies ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-film fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Active Users</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $active ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Inactive Users</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $inactive ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ban fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        <hr/>
                        <div class="d-sm-flex  mb-2">
                                <h1 class="h3 mb-0 text-gray-800">Search</h1>
                        </div>
                        <div class="row mb-3">
                            <form method="POST" class="d-none d-sm-inline-block form-inline my-2 my-md-0 mw-100 col-8 navbar-search">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control bg-white border border-primary small" placeholder="Search for..."
                                        aria-label="Search" aria-describedby="basic-addon2" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="row align-items-center justify-content-center ml-0 mr-0 mb-0">

                            <?php

                                include 'connection.php';
                                if(isset($_POST['submit']))
                                {
                                    $search = $_POST['search'];
                                    $q = "select * from movies where Movie_Name like '%$search%' or ID like '%$search%' or Cast like '%$search%' or Genres like '%$search%' or  IMDB like '%$search%' or Year like '%$search%' ";
                                    $query = mysqli_query($conn,$q);

                                    if($nums = mysqli_num_rows($query))
                                    {
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
                                    }
                                    else
                                    {
                                        echo '
                                        <div class="alert alert-danger col-12 text-center text-sm" role="alert">
                                            <i class="fas fa-times-circle "></i> No Movies Found!!!
                                        </div>
                                        ';   
                                    }
                                }
                            ?>
                        </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <div style="margin-bottom: 260px;"></div>

<?php 
    include 'includes/script.php'; 
    include 'includes/footer.php'; 
 
 ?>


