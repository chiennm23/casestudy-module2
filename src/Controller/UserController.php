<?php


namespace App\Controller;

use App\Model\DBConnect;
use App\Model\UserDB;
use App\Model\Users;

//use App\Model\Users;
class UserController
{
    protected $userDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Quang@123');
        $this->userDB = new UserDB($connection->connect());
    }

    public function findUser($username, $password)
    {
        return $this->userDB->searchUser($username, $password);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            $user = new Users($username, $password, $phone, $email);
            $this->userDB->create($user);
            header("location:../../../index.php");
        }
    }
}