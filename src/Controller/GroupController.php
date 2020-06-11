<?php

namespace App\Controller;


use App\Model\Groups;
use App\Model\GroupDB;
use App\Model\DBConnect;

class GroupController
{
    protected $groupDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Quang@123');
        $this->groupDB = new GroupDB($connection->connect());
    }

    public function index()
    {
        $groups = $this->groupDB->getAll();
        include 'src/View/groups/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/groups/add.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $description = $_REQUEST['description'];
            $status = $_REQUEST['status'];
            $group = new Groups($id, $name, $description, $status);
            $this->groupDB->create($group);
            header('location:index.php?page=list-group');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $id = $_GET['id'];
            $group = $this->groupDB->get($id);
            include "src/View/groups/edit.php";
        } else {
            $id = $_POST['id'];
            $group = new Groups($id, $_POST['name'], $_POST['description'], $_POST['status']);
            $this->groupDB->update($group);
            header('location:index.php?page=list-group');
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/groups/search.php';
        } else {
            $search = $_POST['search'];
            $groups = $this->groupDB->search($search);
            include 'src/View/groups/search.php';
        }
    }

    public function delete($id)
    {
        $this->groupDB->delete($id);
        header('location:index.php?page=list-group');
    }
}