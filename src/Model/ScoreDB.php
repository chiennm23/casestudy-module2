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
            $score = new Score( $item['studentId'], $item['subjectId'], $item['score']);
            array_push($arr, $score);
        }
        return $arr;
    }

    public function create($score)
    {
        $sql = "INSERT INTO `score`( `studentId`, `subjectId`, `score`) VALUES (:studentId, :subjectId, :score);";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':studentId', $score->getStudentId());
        $stmt->bindParam(':subjectId', $score->getSubjectId());
        $stmt->bindParam(':score', $score->getScore());
        $stmt->execute();
    }

    public function search($studentId)
    {
        $sql = "SELECT * FROM `score` WHERE `score`.`studentId`= :studentId ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':studentId', $studentId);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $score = new Score( $item['studentId'], $item['subjectId'], $item['score']);
            array_push($arr, $score);
        }
        return $arr;
    }

    public function update($score)
    {
        $sql = "UPDATE `score` SET `score`= :score WHERE `studentId` = :studentId ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':studentId', $score->getStudentId());
        $stmt->bindParam(':score', $score->getScore());
        $stmt->execute();
    }

    public function get($studentId)
    {
        $sql = "SELECT * FROM score WHERE studentId = :studentId";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':studentId', $studentId);
        $stmt->execute();
        $row = $stmt->fetch();
        $score = new Score($row['studentId'], $row['subjectId'], $row['score']);
        return $score;
    }
}