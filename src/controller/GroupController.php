<?php

namespace Controller;


use Model\Group;
use Model\GroupDB;
use Model\DBConnect;

class GroupController
{
    protected $groupDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Chien@123');
        $this->groupDB = new GroupDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/view/groups/add.php';
        } else {
            $name = $_REQUEST['name'];
            $group = new Group($name);
            $this->groupDB->create($group);
            header('location:index.php');
        }
    }

    public function index()
    {
        $groups = $this->groupDB->getAll();
        include 'src/view/groups/list.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $name = $_GET['name'];
            $group = $this->groupDB->get($name);
            include "src/view/groups/edit.php";
        } else {
            $name = $_POST['name'];
            $group = new GroupDB($name);
            $this->groupDB->update($group);
            header('location:index.php');
        }
    }
}