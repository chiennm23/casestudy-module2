<?php
namespace App\Controller;
use App\Model\studentModel;

class studentController
{
    protected $studentConnect;

    public function __construct()
    {
        $this->studentConnect = new studentModel();
    }

    public function view()
    {
        $students = $this->studentConnect->getAll();
        include "src/View/student/list.php";
    }

    public function add()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            include ("src/View/student/add.php");
        }
        else
        {
            $id=$_REQUEST["id"];
            $name=$_REQUEST["name"];
            $birthday = $_REQUEST["birthday"];
            $email = $_REQUEST["email"];
            $phone= $_REQUEST["phone"];
            $grade = $_REQUEST["grade"];
            $class= $_REQUEST["class"];
            $idclass =$_REQUEST["idclass"];
            $this->studentConnect->addStudent($id,$name,$birthday,$email, $phone, $grade,$class,$idclass);
            header("Location:index.php?page=list-student");
        }
    }
}