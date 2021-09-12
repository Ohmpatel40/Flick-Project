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
                        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
                    </div>


                    <!-- Content Row -->
                    <div class="row align-items-center justify-content-center">
                        <table class="table table-bordered mr-3 ml-3">
                        <thead>
                            <tr class="text-center font-weight-bolder text-lg text-dark">
                                <th>User ID</th>
                                <th>Username</th>
                                <th>E-mail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                $q = "select * from users";
                                $query = mysqli_query($conn,$q);

                                while($res = mysqli_fetch_array($query))
                                {
                                    if($res['Status'] == 'Active')
                                    {
                                        $stat = "btn-success";
                                    }
                                    else
                                    {
                                        $stat = "btn-danger";
                                    }
                                    echo ' 
                                    <tr>
                                        <td class="text-center font-weight-bolder h6 align-middle">'.$res['UID'].'</td>
                                        <td class="font-weight-bolder h6 align-middle">'.$res['Username'].'</td>
                                        <td class="font-weight-bolder h6 align-middle">'.$res['Email'].'</td>
                                        <td class="text-center align-middle"> <a href="change_stat.php?id='.$res['UID'].'" > <button class="btn '.$stat.' w-75 "> '.$res['Status'].' </button> </td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                        </table>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'includes/script.php'; 
    include 'includes/footer.php'; 
 
 ?>


