<?php
/**
 * Created by PhpStorm.
 * Users: usersio
 * Date: 18/03/19
 * Time: 15:10
 */

namespace Controllers;
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
use \Models;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


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
    public function error()
    {
        $title = '404 Error';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/404.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }




}