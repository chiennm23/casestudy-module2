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
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Chien@123');
        $this->studentDB = new StudentDB($connection->connect());
    }

    public function index()
    {
        $students = $this->studentDB->getAll();
        include 'src/View/students/list.php';
    }
}