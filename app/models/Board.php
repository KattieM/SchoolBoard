<?php
/**
 * Created by PhpStorm.
 * User: Katarina
 * Date: 2/24/2019
 * Time: 7:04 PM
 */

class Board
{
    //db attributes
    private $conn;
    private $table_name = "boards";

    //attributes
    private $id;
    private $board_name;

    /**
     * Board constructor.
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
    public function getBoardName(): string
    {
        return $this->board_name;
    }

    /**
     * @param string $board_name
     */
    public function setBoardName(string $board_name)
    {
        $this->board_name = $board_name;
    }



}