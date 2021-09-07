<?php 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 
    include 'session.php';
    include 'connection.php';

    $c = "select * from banner";
    $query = mysqli_query($conn,$c);
    $current = mysqli_fetch_array($query);
 
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
                        <h1 class="h3 mb-0 text-gray-800">Top 10</h1>
                        <div class="float-right">
                            <a href="add_movie.php" class="btn btn-success w-100" data-toggle="modal" data-target="#exampleModalCenter" > <i class="fas fa-pencil-alt"></i> &nbsp; Edit Top 10</a>
                        </div>
                    </div>

                    <?php

                        if(isset($_POST['submit']))
                        {
                            $id = $_POST['id'];
                            $rank = $_POST['rank'];

                            $q = "select * from movies where ID = '$id'";
                            $query = mysqli_query($conn,$q);
                            $res = mysqli_fetch_array($query);

                            if($query)
                            {
                                $name = $res['Movie_Name'];
                                $poster = $res['Poster_URL'];
                                $q = "update top10 set ID = '$id' , Movie_Name = '$name' , Poster_URL = '$poster' where Rank = $rank";
                                $query = mysqli_query($conn,$q);

                                if(!$query)
                                {
                                    echo '
                                    <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                        <i class="fas fa-times-circle "></i> Rank not changed!!
                                    </div>
                                    ';   
                                }
                            }
                            else
                            {
                                echo '
                                <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                    <i class="fas fa-times-circle "></i> Movie not found in database!
                                </div>
                                ';   
                            }
                        }

                    ?>

                    <!-- Content Row -->
                    <div class="row align-items-center justify-content-center">
                        <table class="table table-hover table-bordered mr-3 ml-3">
                        <thead>
                            <tr class="text-center font-weight-bolder text-lg text-dark">
                                <th scope="col">Rank</th>
                                <th scope="col">Poster</th>
                                <th scope="col">Movie Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                $q = "select * from top10";
                                $query = mysqli_query($conn,$q);

                                while($res = mysqli_fetch_array($query))
                                {
                                    echo ' 
                                    <tr>
                                        <td scope="row" style="font-size: 130px;" class="text-center text-dark">'.$res['Rank'].'</td>
                                        <td><img src="'.$res['Poster_URL'].'" style="height: 220px; width:180px;" alt="POSTER" /> </td>
                                        <td class="text-lg text-dark font-weight-bolder" >ID: '.$res['ID'].' <br> Name: '.$res['Movie_Name'].'</td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                        </table>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Update Top 10</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enter Rank</label>
                                            <input type="number" name="rank" max="10" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Movie ID" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enter ID</label>
                                            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Movie ID" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter only already added movie</small>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'includes/script.php'; 
    include 'includes/footer.php'; 
 
 ?>


