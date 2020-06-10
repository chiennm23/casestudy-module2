<?php

namespace App\Model;

class Groups
{
    protected $id;
    protected $name;
    protected $description;
    protected $status;

    public function __construct($id, $name, $description, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}