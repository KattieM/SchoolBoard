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



    public function returnOne($id)
    {
        $query = "SELECT s.id,
        s.name,
        b.board_name,
        (SELECT GROUP_CONCAT(grade SEPARATOR \",\") FROM grades WHERE student_id =".$id.") AS grades,
        (SELECT avg(grade) as average from grades where student_id =".$id.") as average,
        (case WHEN b.board_name=\"CSM\" THEN CASE when (SELECT AVG(grade) FROM grades WHERE student_id =".$id.")>=7 then 'pass' else 'fail' END ELSE case when(SELECT MAX(grade) FROM grades WHERE student_id =".$id.")>=8 then 'pass' else 'fail' end END) as finalresult FROM students s JOIN boards b on s.board_id = b.id WHERE s.id=".$id;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    
}