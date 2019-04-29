

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <!--                <div class="sidebar-brand-text mx-3"><img src="./sixt.png" width="60%"></div> -->
            <div class="sidebar-brand-text mx-3"><img src="./sixt.png" width="60%"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=home">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Pages
        </div>

        <!-- Nav Item - users -->
        <li class="nav-item active">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=users">
                <i class="fas fa-fw fa-user"></i>
                <span>Users</span></a>
        </li>

        <!-- Nav Item - vehicles -->
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=vehicles">
                <i class="fas fa-fw fa-car"></i>
                <span>Vehicles</span></a>
        </li>

        <!-- Nav Item - rents -->
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=rents">
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
<!--                    <li class="nav-item dropdown no-arrow">-->
<!--                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"-->
<!--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>-->
<!--                            <img class="img-profile rounded-circle"-->
<!--                                 src="https://img.icons8.com/windows/32/000000/administrator-male.png">-->
<!--                        </a>-->
<!--                        Dropdown - User Information -->
<!--                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
<!--                             aria-labelledby="userDropdown">-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                Profile-->
<!--                            </a>-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                Settings-->
<!--                            </a>-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                Activity Log-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item" href="../../App/Views/login.html" data-toggle="modal"-->
<!--                               data-target="#logoutModal">-->
<!--                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                Logout-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </li>-->

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->


            <div class="container-fluid">
                <div class="row">
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
                <?php


                if (isset($_POST['form_submitted'])):
                    $idType = $_POST['type'];
                    $name = $_POST['name'];
                    $firstname = $_POST['firstname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $adrRoad = $_POST['road'];
                    $adrCity = $_POST['city'];
                    $adrPC = $_POST['PC'];
                    $numTel = $_POST['telephone'];
                    $url =  'http://127.0.0.1/gestapi/user/add/' . $idType . '/' . $name . '/' . $firstname . '/' . $email . '/' .
                        $password . '/' . $adrRoad . '/' . $adrCity . '/' . $adrPC . '/' . $numTel;
                    $urlManualEncode = str_replace(" ","%20",$url);
                    //var_dump($url);

                    $json = file_get_contents($urlManualEncode);
                    ?>


                    <h2>Merci <?php echo $_POST['firstname'];?>
                        <br>

                        <?php //var_dump($url); ?> </h2>

                    <p>Vous avez été enregistré au nom de
                        <?php echo $_POST['firstname'] . ' ' . $_POST['name']; ?>
                    </p>

                    <p>Go <a href="http://localhost/gestasixt_2.0/?action=users">retour</a> au formulaire</p>

                <?php else: ?>
                    <div style="text-align: center">

                        <h2>Formulaire d'enregistrement d'utilisateur</h2>

                        <form action="http://localhost/gestasixt_2.0/?action=users" method="POST">

                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">
                                            Prénom :
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="firstname">

                                            <br>
                                            Nom :
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="name">

                                            <br>
                                            Email :
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="email">

                                            <br>
                                            Mot de passe :
                                            <br>
                                            <input type="password" class="btn btn-warning btn-icon-split" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">
                                            Rue :
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="road">

                                            <br>
                                            Ville (sans espace):
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="city">

                                            <br>
                                            Code postal :
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="PC">

                                            <br>
                                            Téléphone :
                                            <br>
                                            <input type="text" class="btn btn-warning btn-icon-split" name="telephone">
                                            <br>

                                            Type :
                                            <br>

                                            <select class="btn btn-warning dropdown-toggle" id="type" name="type">
                                                <option value="">               Type               </option>
                                                <option value="1">Admin</option>
                                                <option value="2">Client</option>

                                            </select>


                                            <input type="hidden" name="form_submitted" value="1"/>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">
                                            <input type="submit" value="        Enregistrer        "
                                                   class="btn btn-info  btn-lg">

                                        </div>
                                    </div>
                                </div>


                        </form>
                    </div>

                <?php endif; ?>
                <br>
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Liste des Utilisateurs</h1>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>First name</th>
                        <th>Email</th>

                        <th>Road</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Telephone</th>
                        <!--                        <th>Delete</th>-->

                    </tr>
                    </thead>

                    <tbody>


                    <?php
                    $json = file_get_contents('http://localhost/gestapi/user/count');

                    $dataUser = json_decode($json, true);

                    $resultatUsers = $dataUser['user'][0];

                    $nbUsers = $resultatUsers['nbUsers'];


                    for ($i = 0; $i < $nbUsers; $i++) {


                        $json = file_get_contents('http://localhost/gestapi/user/get/all');
                        $dataUserAll = json_decode($json, true);
                        $resultatUserAll = $dataUserAll['user'][$i];

                        $UserId = $resultatUserAll['id'];
                        $UserIdType = $resultatUserAll['idType'];
                        $UserName = $resultatUserAll['name'];
                        $UserFirstname = $resultatUserAll['firstname'];
                        $UserEmail = $resultatUserAll['email'];

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
            <!-- /.container-fluid -->


        </div>
        <!-- End of Main Content -->


