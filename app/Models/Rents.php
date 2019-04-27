<?php


namespace Models;


class Rents
{
    public function getNbRents()
    {
        $json = file_get_contents('http://localhost/gestapi/rent/count');

        $dataRents = json_decode($json, true);

        $resultatRents = $dataRents['rent'][0];

        $nbRents = $resultatRents['nbRents'];

        return $nbRents;

    }

}