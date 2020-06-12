<?php


namespace App\Model;


class UserDB
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function searchUser($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt =$this->database->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}