


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
                                        <i class="fas fa-user fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Formulaire de suppression d'utilisateur
                                        </div>
                                        <?php
                                        if (isset($_POST['form_delete_submitted'])):
                                            $idUser = $_POST['idUser'];
                                            $url =  'http://127.0.0.1/gestapi/user/delete/' . $idUser;
                                            $urlManualEncode = str_replace(" ","%20",$url);
                                            //var_dump($url);

                                            $json = file_get_contents($urlManualEncode);
                                            ?>


                                            <h2>Vous avez supprimé l'utilisateur n° <?php echo $_POST['idUser'];?>
                                                <br>

                                                <?php //var_dump($url); ?> </h2>


                                            <p>Go <a href="../../../gestasixt_2.0/?action=users">retour</a> au formulaire</p>

                                        <?php else: ?>
                                        <div style="text-align: center">







                                                            <form action="../../../gestasixt_2.0/?action=users" method="POST">
                                                                ID de l'utilisateur :

                                                                <input type="text" class="btn btn-warning btn-icon-split" name="idUser">



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
                <div class="row">
                    <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Formulaire de mise à
                                            jour d'utilisateur
                                        </div>
                                        <?php
                                        if (isset($_POST['form_update_submitted'])):
                                            $idUser = $_POST['idUser'];
                                            $email = $_POST['newEmail'];
                                            $password = $_POST['newMdp'];
                                            $url =  'http://127.0.0.1/gestapi/user/update/' .$idUser.'/'.$password.'/'.$email;
                                            $urlManualEncode = str_replace(" ","%20",$url);
                                            //var_dump($url);

                                            $json = file_get_contents($urlManualEncode);
                                            ?>


                                            <h2>Vous avez mis a jour l'utilisateur n° <?php echo $_POST['idUser'];?>
                                                <br>
                                                <?php echo $_POST['newEmail'];?> <?php echo $_POST['newMdp'];?>
                                                <br>

                                                <?php //var_dump($url); ?> </h2>


                                            <p>Go <a href="http://localhost/gestasixt_2.0/?action=users">retour</a> au formulaire</p>

                                        <?php else: ?>
                                            <div style="text-align: center">







                                                <form action="http://localhost/gestasixt_2.0/?action=users" method="POST">
                                                    ID de l'utilisateur :
                                                    <br ><br>

                                                    <input type="text" class="btn btn-warning btn-icon-split" name="idUser">
                                                    <br ><br>

                                                    Nouvel Email :
                                                    <br ><br>

                                                    <input type="text" class="btn btn-warning btn-icon-split" name="newEmail">
                                                    <br ><br>
                                                    Nouveau Mot de passe :
                                                    <br ><br>

                                                    <input type="text" class="btn btn-warning btn-icon-split" name="newMdp">
                                                    <br ><br>



                                                    <input type="hidden" name="form_update_submitted" value="1"/>


                                                    <input type="submit" value="        Mettre à jour        "
                                                           class="btn btn-info btn-sm">


                                                </form>
                                            </div>

                                        <?php endif; ?>



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

                    <p>Go <a href="../../../gestasixt_2.0/?action=users">retour</a> au formulaire</p>

                <?php else: ?>
                    <div style="text-align: center">

                        <h2>Formulaire d'enregistrement d'utilisateur</h2>

                        <form action="../../../gestasixt_2.0/?action=users" method="POST">

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


