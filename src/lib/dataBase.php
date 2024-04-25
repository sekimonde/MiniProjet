<?php


class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {try{
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=realstate;charset=utf8', 'root', '');
            $this->database ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->database ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }}
        catch(Exception $e){
            throw new Exception("erreur lors de la connection au base de donnée");
        }

        return $this->database;
    }



}