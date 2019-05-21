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
                                        $json = file_get_contents('http://172.21.5.246/gestapi/rent/count');

                                        $dataRents = json_decode($json, true);

                                        $resultatRents = $dataRents['rent'][0];

                                        $nbRents = $resultatRents['nbRents'];

                                        //                              echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$nbVehicles.'</div>';

                                        ?>

                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbRents; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-success" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Formulaire de suppression de location
                                        </div>
                                        <?php
                                        if (isset($_POST['form_delete_submitted'])):
                                            $idLocation = $_POST['idLocation'];
                                            $url =  'http://172.21.5.246/gestapi/rent/delete/' . $idLocation;
                                            $urlManualEncode = str_replace(" ","%20",$url);
                                            //var_dump($url);

                                            $json = file_get_contents($urlManualEncode);
                                            ?>


                                            <h2>Vous avez supprimé la location n° <?php echo $_POST['idLocation'];?>
                                                <br>

                                                <?php //var_dump($url); ?> </h2>


                                            <p>Go <a href="../../../gestasixt_2.0/?action=rents">retour</a> au formulaire</p>

                                        <?php else: ?>
                                            <div style="text-align: center">







                                                <form action="../../../gestasixt_2.0/?action=rents" method="POST">
                                                    ID de la location :

                                                    <input type="text" class="btn btn-success btn-icon-split" name="idLocation">



                                                    <input type="hidden" name="form_delete_submitted" value="1"/>


                                                    <input type="submit" value="        Supprimer        "
                                                           class="btn btn-danger btn-sm">


                                                </form>
                                            </div>

                                        <?php endif; ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php if (isset($_POST['form_submitted'])):
                    $idVehicle = $_POST['idVehicle'];
                    $idUser = $_POST['idUser'];
                    $idStartAgency = $_POST['idStartAgency'];
                    $idEndAgency = $_POST['idEndAgency'];
                    $dateStart = $_POST['DateStart'];
                    $dateEnd = $_POST['DateEnd'];
                    $cost = $_POST['cost'];
                    $kilometers = $_POST['kilometers'];

                    $url = 'http://172.21.5.246/gestapi/rent/add/' . $idVehicle . '/' . $idUser . '/' . $idStartAgency . '/' . $idEndAgency . '/' .
                        $dateStart . '/' . $dateEnd . '/' . $cost . '/' . $kilometers;
                    $urlManualEncode = str_replace(" ","%20",$url);
                    //var_dump($url);

                    $json = file_get_contents($urlManualEncode);
                    ?>


                    <h2>Merci
                        <br>

                        <?php //var_dump($url); ?> </h2>

                    <p>La location du  :
                        <?php echo  $_POST['DateStart']; ?> au <?php echo  $_POST['DateEnd']; ?>
                        a été enregistré.
                    </p>

                    <p>Go <a href="../../../gestasixt_2.0/?action=rents">retour</a> au formulaire</p>

                <?php else: ?>
                    <div style="text-align: center">

                        <h2>Formulaire d'enregistrement de location</h2>

                        <form action="../../../gestasixt_2.0/?action=rents" method="POST">

                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">
                                            Date de départ :
                                            <br>
                                            <input type="date" class="btn btn-success btn-icon-split" name="DateStart">
                                            <br>
                                            Date d'arrivée :
                                            <br>
                                            <input type="date" class="btn btn-success btn-icon-split" name="DateEnd">
                                            <br>

                                            ID Agence de départ :
                                            <br>
                                            <input type="text" class="btn btn-success btn-icon-split" name="idStartAgency">
                                            <br>

                                            ID Agence d'arrivée :
                                            <br>
                                            <input type="text" class="btn btn-success btn-icon-split" name="idEndAgency">
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card  shadow h-100 py-2">
                                        <div class="card-body">

                                            Coût :
                                            <br>
                                            <input type="text" class="btn btn-success btn-icon-split" name="cost">

                                            <br>
                                            Distance (kilomètres) :
                                            <br>
                                            <input type="text" class="btn btn-success btn-icon-split" name="kilometers">

                                            <br>
                                            ID User :
                                            <br>
                                            <input type="text" class="btn btn-success btn-icon-split" name="idUser">

                                            <br>
                                            Id Véhicule :
                                            <br>
                                            <input type="text" class="btn btn-success btn-icon-split" name="idVehicle">

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
                    $json = file_get_contents('http://172.21.5.246/gestapi/rent/count');

                    $dataRent = json_decode($json, true);

                    $resultatRents = $dataRent['rent'][0];

                    $nbRents = $resultatRents['nbRents'];


                    for ($i = 0; $i < $nbRents; $i++) {



                        $json = file_get_contents('http://172.21.5.246/gestapi/rent/get/all');
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
