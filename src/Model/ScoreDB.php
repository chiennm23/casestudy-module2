<?php


namespace App\Model;


class ScoreDB
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM score";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $score = new Score( $item['id'],$item['studentId'], $item['subjectId'], $item['score']);
            array_push($arr, $score);
        }
        return $arr;
    }
}