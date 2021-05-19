<?php

namespace App\models;

class Database
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=restaurant";
        $this->username = "root";
        $this->password = "root";
    }

    public function connect()
    {
        try{
            return new \PDO($this->dsn,$this->username,$this->password);
        } catch (\PDOException $exception){
            echo $exception->getMessage();
            die();
        }
    }




}