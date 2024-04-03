<?php
require_once("src/lib/dataBase.php");
class user{
public string $id;
public string $nom;
public string $prenom;
public string $email;
public string $password;
public string $image;
public string $phoneNumber;
public string $canPost;
public array $posts=[];

}
class handleUsers{
public DatabaseConnection $connection;

public function addUser(string $nom,string $prenom,string $email,
string $password,string $image,string $phoneNumber){
$pdo=$this->connection->getConnection();
$sql='INSERT INTO users(nom, prenom, email,password,image,phoneNumber,canPost) VALUES(:nom, :prenom, :email,
 :password, :image, :phoneNumber, :canPost)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'email' =>$email, 'password'=>$password,
'image'=>$image, 'phoneNumber'=>$phoneNumber,'canPost'=>'1']);
}

public function getUser(string $email,string $password): user{
    $pdo=$this->connection->getConnection();
    $sql = 'SELECT * FROM users WHERE email = :email && password= :password' ;
    $stmt = $pdo->prepare($sql);
     $stmt->execute(['email' => $email,'password'=>$password]);
    $row = $stmt->fetch();
    $user=new user();
    $user->id=$row->id;
    $user->nom=$row->nom;
    $user->prenom=$row->prenom;
    $user->email=$row->email;
    $user->image=$row->image;
    $user->phoneNumber=$row->phoneNumber;
    $user->email=$row->email;
    $user->password=$row->password;
    $user->canPost=$row->canPost;
    return $user;
   }
   public function getUser1(string $id): user{
    $pdo=$this->connection->getConnection();
    $sql = 'SELECT * FROM users WHERE id =?' ;
    $stmt = $pdo->prepare($sql);
     $stmt->execute([$id]);
    $row = $stmt->fetch();
    $user=new user();
    $user->id=$row->id;
    $user->nom=$row->nom;
    $user->prenom=$row->prenom;
    $user->email=$row->email;
    $user->image=$row->image;
    $user->phoneNumber=$row->phoneNumber;
    $user->email=$row->email;
    $user->password=$row->password;
    $user->canPost=$row->canPost;
    return $user;
   }    

public function getUsers(string $canPost): array{
    $pdo=$this->connection->getConnection();
    $sql = 'SELECT * FROM users WHERE canPost=?';
    $stmt = $pdo->prepare($sql);
     $stmt->execute([$canPost]);
    $rows= $stmt->fetchall();
    $users=[];
foreach($rows as $row){
    $user=new user();
    $user->id=$row->id;
    $user->nom=$row->nom;
    $user->prenom=$row->prenom;
    $user->email=$row->email;
    $user->image=$row->image;
    $user->phoneNumber=$row->phoneNumber;
    $user->password=$row->password;
    $user->canPost=$row->canPost;
    $users[]=$user;
}
    return $users;
     }  
}

