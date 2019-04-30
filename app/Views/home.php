            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre de
                                            Vehicules
                                        </div>


                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbVehicles; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-car fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2" >
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre de
                                            Locations
                                        </div>


                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbRents; ?></div>
                                    </div>
                                    <div class="col-auto" >
                                        <i class="fas fa-dollar-sign fa-2x text-success" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nombre
                                            d'utilisateurs
                                        </div>


                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nbUsers; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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