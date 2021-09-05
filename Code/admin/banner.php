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
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800">Banner</h1>
                    </div>

                    <?php

                        if(isset($_POST['submit']))
                        {
                            $id = $_POST['id'];

                            $q = "select * from movies where ID = '$id'";
                            $query = mysqli_query($conn,$q);
                            $num = mysqli_num_rows($query);
                            $res = mysqli_fetch_array($query);

                            if($num == 0)
                            {
                                echo '
                                    <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                        <i class="fas fa-times-circle "></i> Movie not found in database!!!
                                    </div>
                                    ';
                            }
                            else 
                            {
                                if($_FILES['image']['type'] == "image/jpeg" or $_FILES['image']['type'] == "image/jpg" or $_FILES['image']['type'] == "image/png")
                                {
                                    $fileinfo = getimagesize($_FILES['image']['tmp_name']);
                                    if($fileinfo[0] == "1920" && $fileinfo[1] == "520")
                                    {
                                        $image_name = $_FILES['image']['name'];
                                        $movie_name = $res['Movie_Name'];
                                        $movie_url = $res['Movie_URL'];

                                        $d = "delete from banner";
                                        $query = mysqli_query($conn,$d);

                                        $q = "insert into banner(ID,Movie_Name,Banner_Image,Movie_URL) values('$id','$movie_name','$image_name','$movie_url')";
                                        $query = mysqli_query($conn,$q);
                                        if($query)
                                        {
                                            move_uploaded_file($_FILES['image']['tmp_name'],"../banner/".$_FILES['image']['name']);
                                        }
                                        else 
                                        {
                                            echo '
                                            <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                                <i class="fas fa-times-circle "></i> Banner Not Updated!!!
                                            </div>
                                            ';     
                                        }
                                    }
                                    else
                                    {    
                                        echo '
                                        <div class="alert alert-danger col-12 text-center text-sm " role="alert">
                                            <i class="fas fa-times-circle "></i> Image dimension should be 1920 X 520
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
                        }

                    ?>

                    <!-- Content Row -->
                    <div class="row align-items-center justify-content-center">
                        
                        <div class="card mb-3 col-12 bg-light border border-primary">
                            <img class="card-img-top mt-3" src="../banner/<?php echo $current['Banner_Image'] ?>">
                            <div class="card-body">
                                <h3 class="card-title text-center text-dark font-weight-bolder mb-0">Current Banner</h3>
                                <h6 class="card-text">ID: <?php echo $current['ID'] ?> </h6>
                                <h6 class="card-text">Name: <?php echo $current['Movie_Name'] ?> </h6>
                                <a href="" class="btn btn-primary float-right" style="width: 12rem;" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fas fa-pencil-alt"></i> &nbsp; Change Banner</a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Update Banner</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enter Movie ID</label>
                                            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Movie ID" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter only already added movie</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" name="image" accept="image/*" class="form-control-file" id="exampleFormControlFile1" required>
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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'includes/script.php'; 
    include 'includes/footer.php'; 
 
 ?>


