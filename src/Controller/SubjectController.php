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
            $subject = new Subjects($id,$name, $description);
            $this->subjectDB->create($subject);
            header('location:index.php?page=list-subject');
        }
    }

}