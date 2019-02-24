<?php
/**
 * Created by PhpStorm.
 * User: Katarina
 * Date: 2/24/2019
 * Time: 7:08 PM
 */

class Database
{
    //attributes for connection
    private $host = "localhost";
    private $db_name = "schoolboard";
    private $username = "root";
    private $password = "";
    public $connection;

    //connect to db
    public function connect(){
        $this->connection = null;
        try{
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name.";charset=utf8",
                $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->connection;
    }

}