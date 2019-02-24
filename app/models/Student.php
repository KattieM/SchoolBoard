<?php
/**
 * Created by PhpStorm.
 * User: Katarina
 * Date: 2/24/2019
 * Time: 7:00 PM
 */

class Student
{
    //db attributes
    private $conn;
    private $table_name = "students";

    //attributes
    private $id;
    private $name;
    private $board_id;

    /**
     * Student constructor
     */
    public function __construct($db)
    {
        $this->conn = $db;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getBoardId(): int
    {
        return $this->board_id;
    }

    /**
     * @param int $board_id
     */
    public function setBoardId(int $board_id)
    {
        $this->board_id = $board_id;
    }


}