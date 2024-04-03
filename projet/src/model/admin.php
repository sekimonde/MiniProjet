<?php
require_once("src/lib/dataBase.php");
class admin{
public DatabaseConnection $connection;
public string $id;
public string $nom;
public string $prenom;
public string $email;
public string $password;
public string $image;

public function ban(string $idUser){
    $pdo=$this->connection->getConnection();
    $sql='UPDATE users SET canPost = :canPost WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['canPost'=>'0','id'=>$idUser]);}
public function unban(string $idUser){
        $pdo=$this->connection->getConnection();
        $sql='UPDATE users SET canPost = :canPost WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['canPost'=>'1','id'=>$idUser]);}



}