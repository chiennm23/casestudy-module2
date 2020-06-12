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
            $idclass= $_REQUEST['idclass'];
            $student = new Students($id, $name, $birthday, $email,$phone,$grade,$class,$idclass);
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
}