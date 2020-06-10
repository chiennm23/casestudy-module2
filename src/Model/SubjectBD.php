<?php


namespace App\Model;


class SubjectBD
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `subject`";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $subject = new Subjects($item['id'], $item['name'], $item['description']);
            array_push($arr, $subject);
        }
        return $arr;
    }

    public function create($subject)
    {
        $sql = "INSERT INTO `subject`(id, name, description) VALUES (:id,:name, :description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $subject->getId());
        $stmt->bindParam(':name', $subject->getName());
        $stmt->bindParam(':description', $subject->getDescription());
        return $stmt->execute();
    }
}