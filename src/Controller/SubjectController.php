<?php


namespace App\Controller;

use App\Model\Subjects;
use App\Model\SubjectBD;
use App\Model\DBConnect;

class SubjectController
{
    protected $subjectDB;

    public function __construct()
    {
        $connection = new DBConnect("mysql:host=localhost;dbname=ManagerStudent", "root", "Chien@123");
        $this->subjectDB = new SubjectBD($connection->connect());
    }

    public function index()
    {
        $subjects = $this->subjectDB->getAll();
        include 'src/View/subjects/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/subjects/add.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $description = $_REQUEST['description'];
            $subject = new Subjects($id, $name, $description);
            $this->subjectDB->create($subject);
            header('location:index.php?page=list-subject');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $subject = $this->subjectDB->get($id);
            include "src/View/subjects/edit.php";
        } else {
            $id = $_POST['id'];
            $subject = new Subjects($id, $_POST['name'], $_POST['description']);
            $this->subjectDB->update($subject);
            header('location:index.php?page=list-subject');
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/subjects/search.php';
        } else {
            $search = $_POST['search'];
            $subjects = $this->subjectDB->search($search);
            include 'src/View/subjects/search.php';
        }
    }

    public function delete($id)
    {
        $this->subjectDB->delete($id);
        header('location:index.php?page=list-subject');
    }
}