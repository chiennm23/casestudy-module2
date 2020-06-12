<?php
session_start();
require '../../../vendor/autoload.php';
use App\Controller\UserController;
$userController = new UserController();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $result = $userController->findUser($username, $password);
    if ($result) {
        $_SESSION['userLogin'] = $result;
        header('location:../../../index.php');
    } else {
        header('location:login.php');
    }
}


