<?php

$title = 'Home';
//include 'layout/header.php';

?>

    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title; ?></title>

        <!-- Custom fonts for this template-->
        <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="./css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!--                <div class="sidebar-brand-text mx-3"><img src="./sixt.png" width="60%"></div> -->
                <div class="sidebar-brand-text mx-3"><h1>SIXT</h1></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>

            <!-- Nav Item - Visites -->
            <li class="nav-item">
                <a class="nav-link" href="App/Views/users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Users</span></a>
            </li>

            <!-- Nav Item - Portefeuille -->
            <li class="nav-item">
                <a class="nav-link" href="App/Views/vehicles.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Vehicles</span></a>
            </li>

            <!-- Nav Item - Activité Complémentaire -->
            <li class="nav-item">
                <a class="nav-link" href="App/Views/rents.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Rents</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!--                        <li class="nav-item dropdown no-arrow">-->
                        <!--                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"-->
                        <!--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                        <!--                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>-->
                        <!--                                <img class="img-profile rounded-circle"-->
                        <!--                                     src="https://img.icons8.com/windows/32/000000/administrator-male.png">-->
                        <!--                            </a>-->
                        <!-- Dropdown - User Information -->
                        <!--                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
                        <!--                                 aria-labelledby="userDropdown">-->
                        <!--                                <a class="dropdown-item" href="#">-->
                        <!--                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                                    Profile-->
                        <!--                                </a>-->
                        <!--                                <a class="dropdown-item" href="#">-->
                        <!--                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                                    Settings-->
                        <!--                                </a>-->
                        <!--                                <a class="dropdown-item" href="#">-->
                        <!--                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                                    Activity Log-->
                        <!--                                </a>-->
                        <!--                                <div class="dropdown-divider"></div>-->
                        <!--                                <a class="dropdown-item" href="./App/Views/login.html" data-toggle="modal"-->
                        <!--                                   data-target="#logoutModal">-->
                        <!--                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                                    Logout-->
                        <!--                                </a>-->
                        <!--                            </div>-->
                        <!--                        </li>-->

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!--  ////////////////////////////////////////////////////////////////////////////////////////   -->
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nombre de
                                                Vehicules
                                            </div>
                                            <?php
                                            $json = file_get_contents('http://localhost/gestapi/vehicle/count');

                                            $dataVehicle = json_decode($json, true);

                                            $resultatvehicles = $dataVehicle['vehicle'][0];

                                            $nbVehicles = $resultatvehicles['nbVehicles'];

                                            //                              echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$nbVehicles.'</div>';

                                            ?>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbVehicles; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-car fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nombre de
                                                Locations
                                            </div>
                                            <?php
                                            $json = file_get_contents('http://localhost/gestapi/rent/count');

                                            $dataRents = json_decode($json, true);

                                            $resultatRents = $dataRents['rent'][0];

                                            $nbRents = $resultatRents['nbRents'];

                                            //                              echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$nbVehicles.'</div>';

                                            ?>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbRents; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nombre
                                                d'utilisateurs
                                            </div>
                                            <?php
                                            $json = file_get_contents('http://localhost/gestapi/user/count');

                                            $dataUser = json_decode($json, true);

                                            $resultatUsers = $dataUser['user'][0];

                                            $nbUsers = $resultatUsers['nbUsers'];

                                            //                              echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$nbVehicles.'</div>';

                                            ?>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbUsers; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($_POST['form_submitted'])): ?>

                        <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>

                        <p>You have been registered as
                            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                        </p>

                        <p>Go <a href="/registration_form.php">back</a> to the form</p>

                    <?php else: ?>
                        <div style="text-align: center">
                            <h2 >Registration Form</h2>

                            <form action="./App/Views/usertruc2.php" method="POST">

                                First name:
                                <br>
                                <input type="text" name="firstname">

                                <br>
                                Last name:
                                <br>
                                <input type="text" name="lastname">

                                <input type="hidden" name="form_submitted" value="1" />
                                <br><br>

                                <input type="submit" value="Submit">

                            </form>
                        </div>
                    <?php endif; ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>First name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Road</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Telephone</th>
                            <!--                        <th>Delete</th>-->

                        </tr>
                        </thead>

                        <tbody>


                        <?php
                        for ($i = 0; $i < $nbUsers; $i++) {


                            $json = file_get_contents('http://localhost/gestapi/user/get/all');
                            $dataUserAll = json_decode($json, true);
                            $resultatUserAll = $dataUserAll['user'][$i];

                            $UserId = $resultatUserAll['id'];
                            $UserIdType = $resultatUserAll['idType'];
                            $UserName = $resultatUserAll['name'];
                            $UserFirstname = $resultatUserAll['firstname'];
                            $UserEmail = $resultatUserAll['email'];
                            $UserPassword = $resultatUserAll['password'];
                            $UserAdrRoad = $resultatUserAll['adrRoad'];
                            $UserAdrCity = $resultatUserAll['adrCity'];
                            $UserAdrPc = $resultatUserAll['adrPC'];
                            $UserNumTel = $resultatUserAll['numTel'];
                            echo '<tr>
                                        <td>' . $UserId . '</td> 
                                        <td>' . $UserIdType . '</td> 
                                        <td>' . $UserName . '</td> 
                                        <td>' . $UserFirstname . '</td> 
                                        <td>' . $UserEmail . '</td> 
                                        <td>' . $UserPassword . '</td> 
                                        <td>' . $UserAdrRoad . '</td> 
                                        <td>' . $UserAdrCity . '</td> 
                                        <td>' . $UserAdrPc . '</td> 
                                        <td>' . $UserNumTel . '</td> 
                                  </tr>';
                        }
                        ?>

                        <!--                        <td>{{ absence.getEndDate() }}</td>-->
                        <!--                        <td>{{ absence.getAbsencePattern() }}</td>-->
                        <!--                        <td>{{ absence.getType() }}</td>-->
                        <!--                        <td><a href="{{ path_for('edit_absence', {'absence_id':absence.getId()} ) }}"> <i-->
                        <!--                                        class="fa fa-pencil" aria-hidden="true"></i> </a></td>-->
                        <!--                        <td><a href="#"> <i class="fa fa-times" aria-hidden="true"></i> </a></td>-->


                    </table>





                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; RATELADE William - 2019</span>
                        </div>
                    </div>
                </footer>


                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-warning" href="./App/Views/login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./js/sb-admin-2.min.js"></script>

    </body>

    </html>
<?php
?>