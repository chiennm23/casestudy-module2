<?php


namespace App\Model;


class Students
{
    protected $id;
    protected $name;
    protected $birthday;
    protected $email;
    protected $phone;
    protected $grade;
    protected $class;
    protected $idclass;
    public function __construct($id,$name,$birthday,$email,$phone,$grade,$class,$idclass)
    {
        $this->id=$id;
        $this->name=$name;
        $this->birthday=$birthday;
        $this->email=$email;
        $this->phone=$phone;
        $this->grade=$grade;
        $this->class=$class;
        $this->idclass=$idclass;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
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
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return mixed
     */
    public function getIdclass()
    {
        return $this->idclass;
    }
}