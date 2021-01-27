<?php
namespace App\Repository;

abstract class BaseRepository
{
    protected \PDO $database;

    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }
    protected function getDb(): \PDO
    {
        return $this->database;
    }  
}
