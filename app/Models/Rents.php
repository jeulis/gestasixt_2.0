<?php


namespace Models;


class Rents
{
    public function getNbRents()
    {
        $json = file_get_contents('http://172.21.5.246/gestapi/rent/count');

        $dataRents = json_decode($json, true);

        $resultatRents = $dataRents['rent'][0];

        $nbRents = $resultatRents['nbRents'];

        return $nbRents;

    }

}
