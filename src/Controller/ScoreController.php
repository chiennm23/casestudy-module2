<?php
namespace App\Controller;

use App\Model\ScoreDB;
use App\Model\DBConnect;
use App\Model\Score;

class ScoreController
{
    protected $scoreDB;

    public function __construct()
    {
        $connection = new DBConnect('mysql:host=localhost;dbname=ManagerStudent', 'root', 'Quang@123');
        $this->scoreDB = new ScoreDB($connection->connect());
    }

    public function index()
    {
        $points = $this->scoreDB->getAll();
        include 'src/View/score/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/score/add.php';
        } else {
            $studentId = $_REQUEST['studentId'];
            $subjectId = $_REQUEST['subjectId'];
            $scoreSubject = $_REQUEST['score'];
            $score = new Score( $studentId, $subjectId, $scoreSubject);
            $this->scoreDB->create($score);
            header('location:index.php?page=list-score');
        }
    }
}