<?php


namespace App\Model;


class Users
{
    protected $username;
    protected $password;
    protected $phone;
    protected $email;

    public function __construct($username, $password, $phone, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}