<?php
/**
 * Created by PhpStorm.
 * User: Katarina
 * Date: 2/24/2019
 * Time: 7:05 PM
 */

class Grade
{
    //db attributes
    private $conn;
    private $table_name = "grades";

    //attributes
    private $student_id;
    private $id;
    private $grade;

    /**
     * Grade constructor.
     */
    public function __construct($db)
    {
        $this->conn = $db;
    }

    /**
     * @return int
     */
    public function getStudentId(): int
    {
        return $this->student_id;
    }

    /**
     * @param int $student_id
     */
    public function setStudentId(int $student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getGrade(): int
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     */
    public function setGrade(int $grade)
    {
        $this->grade = $grade;
    }



}