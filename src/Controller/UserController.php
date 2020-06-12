<?php


namespace App\Controller;

use App\Model\DBConnect;
use App\Model\UserDB;

//use App\Model\Users;
class UserController
{
    protected $userDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Chien@123');
        $this->userDB = new UserDB($connection->connect());
    }

    public function findUser($username, $password)
    {
        return $this->userDB->searchUser($username, $password);
    }
}