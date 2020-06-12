<?php


namespace App\Controller;

use App\Model\DBConnect;
use App\Model\Students;
use App\Model\StudentDB;

class StudentsController
{
    protected $studentDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Quang@123');
        $this->studentDB = new StudentDB($connection->connect());
    }

    public function index()
    {
        $students = $this->studentDB->getAll();
        include 'src/View/students/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/students/add.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $birthday = $_REQUEST['birthday'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $grade = $_REQUEST['grade'];
            $class = $_REQUEST['class'];
            $idclass = $_REQUEST['idclass'];
            $student = new Students($id, $name, $birthday, $email, $phone, $grade, $class, $idclass);
            $this->studentDB->create($student);
            header('location:index.php?page=list-student');
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'src/View/students/search.php';
        } else {
            $search = $_POST['search'];
            $students = $this->studentDB->search($search);
            include 'src/View/students/search.php';
        }
    }

    public function show($id)
    {
        $student = $this->studentDB->findById($id);
        include 'src/View/students/detail.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $student = $this->studentDB->get($id);
            include 'src/View/students/edit.php';
        } else {
            $id = $_POST['id'];
            $student = new Students($id, $_POST['name'],$_POST['birthday'],$_POST['email'],$_POST['phone'],$_POST['grade'],$_POST['class'],$_POST['idclass']);
            $this->studentDB->update($student);
            header('location:index.php?page=list-student');
        }
    }
}