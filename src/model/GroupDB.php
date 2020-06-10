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
            $group = new Groups($item['id'],$item['name'], $item['description'], $item['status']);
            array_push($arr, $group);
        }
        return $arr;
    }

    public function create($group)
    {
        $sql = "INSERT INTO group_s (name, description, status) VALUES (:name, :description, :status)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $group->getName());
        $stmt->bindParam(':description', $group->getDescription());
        $stmt->bindParam(':status', $group->getStatus());
        return $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM group_s WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $group = new Groups($row['id'], $row['name'], $row['description'], $row['status']);
        return $group;
    }

    public function update($group)
    {
        $sql = "UPDATE `group_s` SET name= :name, description = :description, status = :status WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $group->getName());
        $stmt->bindParam(':description', $group->getDescription());
        $stmt->bindParam(':status', $group->getStatus());
        $stmt->bindParam(':id', $group->getId());
        $stmt->execute();
    }


}