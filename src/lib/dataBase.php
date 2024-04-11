<?php


class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=realstate;charset=utf8', 'mohamed amin', 'mohamedamin');
            $this->database ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->database ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        return $this->database;
    }



}