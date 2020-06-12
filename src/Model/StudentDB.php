<?php


namespace App\Model;


class StudentDB
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `students`";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $student = new Students($item['id'], $item['name'], $item['birthday'], $item['email'], $item['phone'], $item['grade'], $item['class'], $item['idclass']);
            array_push($arr, $student);
        }
        return $arr;
    }

    public function create($student)
    {
        $sql = "INSERT INTO `students`(`id`, `name`, `birthday`, `email`, `phone`, `grade`, `class`, `idclass`) 
                VALUES (:id,:name, :birthday, :email, :phone, :grade, :class, :idclass)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $student->getId());
        $stmt->bindParam(':name', $student->getName());
        $stmt->bindParam(':birthday', $student->getBirthday());
        $stmt->bindParam(':email', $student->getEmail());
        $stmt->bindParam(':phone', $student->getPhone());
        $stmt->bindParam(':grade', $student->getGrade());
        $stmt->bindParam(':class', $student->getClass());
        $stmt->bindParam(':idclass', $student->getIdclass());
        return $stmt->execute();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM students WHERE idclass = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM students WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $student = new Students($row['id'], $row['name'], $row['birthday'], $row['email'], $row['phone'], $row['grade'], $row['class'], $row['idclass']);
        return $student;
    }

    public function update($student)
    {
        $sql = "UPDATE `students` SET `name`= :name,`birthday`= :birthday,`email`= :email,`phone`= :phone,`grade`= :grade,`class`= :class,`idclass`= :idclass 
                WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $student->getId());
        $stmt->bindParam(':name', $student->getName());
        $stmt->bindParam(':birthday', $student->getBirthday());
        $stmt->bindParam(':email', $student->getEmail());
        $stmt->bindParam(':phone', $student->getPhone());
        $stmt->bindParam(':grade', $student->getGrade());
        $stmt->bindParam(':class', $student->getClass());
        $stmt->bindParam(':idclass', $student->getIdclass());
        $stmt->execute();
    }
}