<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 15:10
 */

namespace Controllers;
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
//use Models\Home;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Controllers/variables.php';


class ControllerManage
{
    //fonctions de routage
    public function home()
    {
        $nbUsers = \Models\Users::getNbUsers();
        $nbVehicles = \Models\Vehicles::getNbVehicles();
        $nbRents = \Models\Rents::getNbRents();
        $title = 'Home';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/home.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }
    public function users()
    {
        $nbUsers = \Models\Users::getNbUsers();
        $title = 'Users';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/users.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }
    public function vehicles()
    {
        $nbVehicles = \Models\Vehicles::getNbVehicles();
        $title = 'Vehicles';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/vehicles.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }
    public function rents()
    {
        $nbRents = \Models\Rents::getNbRents();
        $title = 'Rents';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/rents.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }

    //fonctions de formulaires

//    public function addUser($idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel)
//    {
//        $user = \Models\User::addUser($idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel);
//        $this->home();
//    }


}