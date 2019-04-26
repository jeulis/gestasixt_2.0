<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 15:10
 */

namespace Controllers;

//use Models\Home;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
class ControllerManage
{
    public function home()
    {
        $nbUsers = \Models\Home::getNbUsers();
        $nbVehicles = \Models\Home::getNbVehicles();
        $nbRents = \Models\Home::getNbRents();
        $title = 'Home';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/home.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }
    public function users()
    {
        $nbUsers = \Models\Home::getNbUsers();
        $title = 'Users';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/users.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }
    public function vehicles()
    {
        $nbVehicles = \Models\Home::getNbVehicles();
        $title = 'Vehicles';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/vehicles.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }
    public function rents()
    {
        $nbRents = \Models\Home::getNbRents();
        $title = 'Rents';

        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/header.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/rents.php';
        include DOC_ROOT_PATH . '../html/gestasixt_2.0/app/Views/HF/footer.php';
    }


}