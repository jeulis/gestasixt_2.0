<?php
require ('./vendor/autoload.php');
require('./app/Controllers/ControllerManage.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        \Controllers\ControllerManage::home();
    }
    elseif ($_GET['action'] == 'users') {
        \Controllers\ControllerManage::users();
    }
    elseif ($_GET['action'] == 'vehicles') {
        \Controllers\ControllerManage::vehicles();
    }
    elseif ($_GET['action'] == 'rents') {
        \Controllers\ControllerManage::rents();
    }


}
else {
    echo ('error');
}

//if (isset($_GET['controller'])) {
//    if (isset($_GET['action'])) {
//        try {
//            call_user_func('Controllers\\' . $_GET['controller'] . '::_getAction', $_GET['action']);
//        } catch (Exception $e) {
//            echo 'Exception reçue : ' . $e->getMessage() . "\n";
//        }
//    } else {
//        call_user_func('Controllers\\' . $_GET['controller'] . '::_getAction', 'default');
//    }
//} else {
//    call_user_func('Controllers\Dashboard::_getAction', 'default');
