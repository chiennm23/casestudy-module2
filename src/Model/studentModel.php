<?php


namespace App\Model;


class studentModel
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addStudent($id, $name, $birthday, $email, $phone, $grade, $class,$idclass)
    {
        $sql = "INSERT INTO `students`(`id`, `name`, `birthday`, `email`, `phone`, `grade`, `class`,`idclass`) VALUES (:id, :name, :birthday, :email, :phone, :grade, :class, :idclass)";
        $stmt = $this->database->prepare($sql);
        $stmt ->bindParam(':id',$id);
        $stmt ->bindParam(':name',$name);
        $stmt ->bindParam(':birthday',$birthday);
        $stmt ->bindParam(':email',$email);
        $stmt ->bindParam(':phone',$phone);
        $stmt ->bindParam(':grade',$grade);
        $stmt ->bindParam(':class',$class);
        $stmt ->bindParam(':idclass',$idclass);
        $stmt->execute();
    }

}