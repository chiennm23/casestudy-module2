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
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create($user)
    {
        $sql = "INSERT INTO `users`(`username`, `password`, `phone`, `email`)
                VALUES (username = :username, password = :password, phone = :phone, email = :email )";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':username', $user->getUsername());
        $stmt->bindParam(':password', $user->getPassword());
        $stmt->bindParam(':phone', $user->getPhone());
        $stmt->bindParam(':email', $user->getEmail());
        $stmt->execute();
    }
}