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

public function getUser(string $email): user{
    $pdo=$this->connection->getConnection();
    $sql = 'SELECT * FROM users WHERE email = :email' ;
    $stmt = $pdo->prepare($sql);
     $stmt->execute(['email' => $email]);
    $row = $stmt->fetch();
    if($row){
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
    return $user;}
    else{
        throw new Exception("cette email n'existe pas");
    }
   }
   public function getUser1(string $id): user{
    try{$pdo=$this->connection->getConnection();
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
        return $user;}
        catch(Exception $e){
            throw new Exception("Erreur lors de la recherche des utilisateurs: " . $e->getMessage());}
         
    
    
    
   }    

public function getUsers(string $canPost): array{
    try{
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
    return $users;}
    catch(PDOException $e){
        throw new Exception("Erreur lors de la recherche des utilisateurs: " . $e->getMessage());
     } }
     
     






     public function insertData($nom, $prenom, $email, $password, $image, $phoneNumber)
     {
         try {
            $pdo=$this->connection->getConnection();
     
         
             $canPost = 1; // Valeur par défaut pour canPost
     
             $query = $pdo->prepare("INSERT INTO users (nom, prenom, email, password, image, phoneNumber, canPost) VALUES (:nom, :prenom, :email, :password, :image, :phoneNumber, :canPost)");
     
             $query->bindParam(':nom', $nom);
             $query->bindParam(':prenom', $prenom);
             $query->bindParam(':email', $email);
             $query->bindParam(':password', $password);
             $query->bindParam(':image', $image);
             $query->bindParam(':phoneNumber', $phoneNumber);
             $query->bindParam(':canPost', $canPost);
     
             $success=$query->execute();
      
             //echo "Les données ont été insérées avec succès.";
             return $success;
         } catch (PDOException $e) {
             if ($e->errorInfo[1] == 1062) {
                 // Duplicate entry error code (1062)
                 throw new Exception("L'email ou numero de telephone est déjà utilisé.");
             } else {
                 // Other database error
                 throw new Exception( "Erreur lors de l'insertion des données: " . $e->getMessage());
             }
         }
     }
     public function login($email, $password)
     {
     try {
        $pdo=$this->connection->getConnection();
     
         // Récupérer le hachage du mot de passe de l'utilisateur à partir de la base de données
         $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
         $query->bindParam(':email', $email);
         $query->execute();
         $user = $query->fetch();
     
         // Vérifier si un utilisateur correspondant a été trouvé
         if ($user && password_verify($password, $user->password)) {
             return $user; // L'utilisateur existe et les mots de passe correspondent, retourne les informations de l'utilisateur
         } else {
             return false; // Aucun utilisateur trouvé avec l'email donné ou mot de passe incorrect
         }
     
     } catch (PDOException $e) {
         throw new Exception("Erreur lors de la recherche de l'utilisateur: " . $e->getMessage());
     }
     }
     



     public function updateCanPost(string $id,string $canPost){
        try {
        $pdo=$this->connection->getConnection();
        $sql = 'UPDATE users SET canPost = :canPost WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['canPost'=>$canPost,'id'=>$id]);}
        catch (PDOException $e) {
            throw new Exception("Erreur : " . $e->getMessage());}

     }
     public function deleteUser(string $id){
        try{
        $pdo=$this->connection->getConnection();
    $sql='DELETE FROM users WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
     }
    catch (PDOException $e) {
        throw new Exception("Erreur lors de la suppression de l'utilisateur: " . $e->getMessage());

    }
    }
    public function updatePicture(string $id,string $image){
        try{
            $pdo=$this->connection->getConnection();
            $sql = 'UPDATE users SET image = :image WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['image'=>$image,'id'=>$id]);}
        
        catch (PDOException $e) {
            throw new Exception("Erreur lors de la modification de l'image de profil: " . $e->getMessage());
    
        }
    }


}
