<?php


class DatabaseConnection
{



  public $database=null;
    public function __construct(){
        $host =  'localhost';
 $user = 'mohamed amin';
$password = 'mohamedamin';
$dbname = 'realstate';
    $dsn = 'mysql:host='. $host .';dbname='. $dbname;
        if ($this->database === null) {
            $this->database =  $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
    }

}