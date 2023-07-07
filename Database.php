<?php

class Database
{

    public $connection;
    public $statement;

    public function __construct($config)
    {

        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO($dsn, "admin", "Sima@7979119-Ziyaei", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute();

        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch(); 
    }

    public function findOrFail(){
        $result  = $this->find();

        if( !$result){
            abort();
        }

        return $result;
    }
}
