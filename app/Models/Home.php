<?php

/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class Home
{

    public function getNbVehicles()
    {
        $json = file_get_contents('http://localhost/gestapi/vehicle/count');

        $dataVehicle = json_decode($json, true);

        $resultatvehicles = $dataVehicle['vehicle'][0];

        $nbVehicles = $resultatvehicles['nbVehicles'];

        return $nbVehicles;

    }
    public function getNbRents()
    {
        $json = file_get_contents('http://localhost/gestapi/rent/count');

        $dataRents = json_decode($json, true);

        $resultatRents = $dataRents['rent'][0];

        $nbRents = $resultatRents['nbRents'];

        return $nbRents;

    }
    public function getNbUsers()
    {
        $json = file_get_contents('http://localhost/gestapi/user/count');

        $dataUser = json_decode($json, true);

        $resultatUsers = $dataUser['user'][0];

        $nbUsers = $resultatUsers['nbUsers'];

        return $nbUsers;

    }

}