<?php
require_once('src/lib/dataBase.php');
class post{
public string $id;
public string $picture;
public string $name;
public string $description;
public string $price;
public string $idUser;

}
class handlePosts{
    public DatabaseConnection $connection;
    public function getPost(string $id):post{
        $pdo=$this->connection->getConnection();
        $sql = 'SELECT * FROM posts WHERE id= :id' ;
        $stmt = $pdo->prepare($sql);
     $stmt->execute(['idUser'=>$id]);
    $row= $stmt->fetch();
    $post=new post();
    $post->id=$row->id;
    $post->name=$row->name;
    $post->description=$row->description;
    $post->price=$row->price;
    $post->picture=$row->picture;
    $post->idUser=$row->idUser;
    return $post;
}





 public function getPosts(string $idUser='-1'):array{
        $pdo=$this->connection->getConnection();
        $sql = 'SELECT * FROM posts WHERE idUser= :idUser' ;
        if($idUser=='-1'){
            $sql = 'SELECT * FROM posts';
            $stmt = $pdo->prepare($sql);
     $stmt->execute([]);
        }
        else{
        $stmt = $pdo->prepare($sql);
     $stmt->execute(['idUser'=>$idUser]);}
    $rows= $stmt->fetchAll();
    $posts=[];
    foreach($rows as $row){
$post=new post();
$post->id=$row->id;
$post->name=$row->name;
$post->description=$row->description;
$post->price=$row->price;
$post->picture=$row->picture;
$post->idUser=$row->idUser;
$posts[]=$post;
    }
    return $posts;
}

public function addPost(string $picture,string $name,
string $description,string $price,int $idUser)
{
    $pdo=$this->connection->getConnection();
    $sql='INSERT INTO posts(picture,name,description,price,idUser) VALUES
    ( :picture, :name, :description, :price, :idUser)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['picture'=>$picture,'name'=>$name,'description'=>$description
,'price'=>$price,'idUser'=>$idUser]);
}

public function deletePost(string $id){

    $pdo=$this->connection->getConnection();
    $sql='DELETE FROM posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
}
}