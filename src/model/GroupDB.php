<?php

namespace Model;

class GroupDB
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM group_s";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $group = new Group($item['name']);
            array_push($arr, $group);
        }
        return $arr;
    }

    public function create($group)
    {
        $sql = "INSERT INTO group_s (name) VALUES (:name)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $group->getName());
        return $stmt->execute();
    }


}