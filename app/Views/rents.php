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
        <li class="nav-item">
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
        <li class="nav-item active">
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
<!--                         Dropdown - User Information -->
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

                    <!-- Page Heading -->

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre de
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

                </div>
                <?php if (isset($_POST['form_submitted'])):
                    $idType = $_POST['type'];
                    $name = $_POST['name'];
                    $firstname = $_POST['firstname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $adrRoad = $_POST['road'];
                    $adrCity = $_POST['city'];
                    $adrPC = $_POST['PC'];
                    $numTel = $_POST['telephone'];
                    $url = 'http://127.0.0.1/gestapi/user/add/' . $idType . '/' . $name . '/' . $firstname . '/' . $email . '/' .
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

                        <h2>Formulaire d'enregistrement de véhicule</h2>

                        <form action="http://localhost/gestasixt_2.0/?action=users" method="POST">

                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">
                                            Marque :
                                            <br>
                                            <input type="text" name="brand">

                                            <br>
                                            Modèle :
                                            <br>
                                            <input type="text" name="model">

                                            <br>
                                            categorie :
                                            <br>
                                            <select class="texte" name="id_categorie">

                                                <option name="">Cuisine</option>
                                                <option name="">Dictionnaire</option>
                                                <option name="">Informatique</option>
                                                <option name="">Policier</option>
                                                <option name="">Préparation concours</option>
                                                <option name="">Roman</option>
                                                <option name="">Santé</option>
                                                <option name="">Science Fiction</option>
                                                <option name="">Sport</option>

                                                <!-- Fin d'une liste dÃ©roulante -->
                                            </select>


                                            <br>
                                            Mot de passe :
                                            <br>
                                            <input type="password" name="registration">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">
                                            Rue :
                                            <br>
                                            <input type="text" name="capacity">

                                            <br>
                                            Ville (sans espace):
                                            <br>
                                            <input type="text" name="color">

                                            <br>
                                            Code postal :
                                            <br>
                                            <input type="text" name="category">

                                            <br>
                                            Téléphone :
                                            <br>
                                            <input type="text" name="nbPlaces">


                                            <input type="hidden" name="form_submitted" value="1"/>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">

                                            <input type="submit" value="        Enregistrer        "
                                                   class="btn btn-success btn-icon-split">
                                        </div>
                                    </div>
                                </div>


                        </form>
                    </div>

                <?php endif; ?>
                <h1 class="h3 mb-4 text-gray-800">Liste des locations</h1>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Vehicle</th>
                        <th>ID User</th>
                        <th>ID Start Agency</th>
                        <th>ID End Agency</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Cost</th>
                        <th>Kilometers</th>
                        <!--                        <th>Delete</th>-->

                    </tr>
                    </thead>

                    <tbody>


                    <?php
                    $json = file_get_contents('http://localhost/gestapi/rent/count');

                    $dataRent = json_decode($json, true);

                    $resultatRents = $dataRent['rent'][0];

                    $nbRents = $resultatRents['nbRents'];


                    for ($i = 0; $i < $nbRents; $i++) {



                        $json = file_get_contents('http://localhost/gestapi/rent/get/all');
                        $dataRentAll = json_decode($json, true);
                        $resultatRentAll = $dataRentAll['rent'][$i];

                        $RentId = $resultatRentAll['id'];
                        $RentIdVehicle = $resultatRentAll['idVehicle'];
                        $RentIdUser = $resultatRentAll['idUser'];
                        $RentIdStartAgency = $resultatRentAll['idStartAgency'];
                        $RentIdEndAgency = $resultatRentAll['idEndAgency'];
                        $RentDateStart = $resultatRentAll['dateStart'];
                        $RentDateEnd = $resultatRentAll['dateEnd'];
                        $RentCost = $resultatRentAll['cost'];
                        $RentKilometers = $resultatRentAll['kilometers'];
                        echo '<tr>
                                        <td>' . $RentId . '</td> 
                                        <td>' . $RentIdVehicle . '</td> 
                                        <td>' . $RentIdUser . '</td> 
                                        <td>' . $RentIdStartAgency . '</td> 
                                        <td>' . $RentIdEndAgency . '</td> 
                                        <td>' . $RentDateStart . '</td> 
                                        <td>' . $RentDateEnd . '</td> 
                                        <td>' . $RentCost . '</td> 
                                        <td>' . $RentKilometers . '</td> 
                                       
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
