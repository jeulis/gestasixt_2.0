<?php


namespace Models;


class Vehicles
{
    public function getNbVehicles()
    {
        $json = file_get_contents('http://172.21.5.246/gestapi/vehicle/count');

        $dataVehicle = json_decode($json, true);

        $resultatvehicles = $dataVehicle['vehicle'][0];

        $nbVehicles = $resultatvehicles['nbVehicles'];

        return $nbVehicles;

    }

}
