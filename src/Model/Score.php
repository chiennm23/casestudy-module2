<?php


namespace App\Model;


class Score
{
    protected $id;
    protected $studentId;
    protected $subjectId;
    protected $score;
    public function __construct($id,$studentId,$subjectId,$score)
    {
        $this->id=$id;
        $this->studentId=$studentId;
        $this->subjectId=$subjectId;
        $this->score=$score;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @return mixed
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}