<?php

namespace Controller;


use Model\Group;
use Model\ClassDB;
use Model\DBConnect;

class GroupController
{
    protected $groupDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Chien@123');
        $this->groupDB = new ClassDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/view/groups/add.php';
        } else {
            $name = $_REQUEST['name'];
            $class = new Group($name);
            $this->groupDB->create($class);
            $massage = 'Class created';
            include 'src/view/add.php';
        }
    }

    public function index()
    {
        $groups = $this->groupDB->getAll();
        include 'src/view/groups/list.php';
    }
}