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




}
class handleAdmins{
    public DatabaseConnection $connection;
public function getadmin(string $id): admin{
    try{
    $pdo=$this->connection->getConnection();
    $sql = 'SELECT * FROM admins WHERE id =?' ;
    $stmt = $pdo->prepare($sql);
     $stmt->execute([$id]);
    $row = $stmt->fetch();
    $admin=new admin();
    $admin->id=$row->id;
    $admin->nom=$row->nom;
    $admin->prenom=$row->prenom;
    $admin->email=$row->email;
    $admin->image=$row->image;
    $admin->password=$row->password;

    return $admin;}
    catch(PDOException $e){
        throw new Exception("Erreur lors de la recherche de l'utilisateur: ".$e->getMessage() );}
   } 

   public function login($email, $password)
   {
   try {
      $pdo=$this->connection->getConnection();
   
       // Récupérer le hachage du mot de passe de l'utilisateur à partir de la base de données
       $query = $pdo->prepare("SELECT * FROM admins WHERE email = :email");
       $query->bindParam(':email', $email);
       $query->execute();
       $admin = $query->fetch();
   
       // Vérifier si un utilisateur correspondant a été trouvé
       if ($admin && password_verify($password, $admin->password)) {
           return $admin; // L'utilisateur existe et les mots de passe correspondent, retourne les informations de l'utilisateur
       } else {
           return false; // Aucun utilisateur trouvé avec l'email donné ou mot de passe incorrect
       }
   
   } catch (PDOException $e) {
       throw new Exception("Erreur lors de la recherche de l'utilisateur: ".$e->getMessage());
        // En cas d'erreur, retourne false
   }
   }
   
}