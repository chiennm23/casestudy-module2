<?php

namespace App\Model;

class DBConnect
{
    protected $dbn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dbn = "mysql:host=localhost;dbname=ManagerStudent";
        $this->username = "root";
        $this->password="Quang@123";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dbn, $this->username, $this->password);
        }catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}