
<?php
require_once('src/model/user.php');
class signUp{
    public function execute(){



// Créer une instance de la classe DatabaseConnection
$databaseConnection = new DatabaseConnection();

try {
    // Obtenir une connexion à la base de données
    $handleUsers=new handleUsers();
    $handleUsers->connection=new DatabaseConnection();
    
    }

 catch (PDOException $e) {
    // Gérer les erreurs de connexion
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $image = "default.jpg"; // À adapter selon votre logique de gestion des fichiers
    $phoneNumber = $_POST["phoneNumber"];

    // Créer une instance de la classe DatabaseConnection
    $databaseConnection = new DatabaseConnection();

    // Appeler la fonction insertData() pour insérer les données
   if ($handleUsers->insertData($nom, $prenom, $email, $password_hash, $image, $phoneNumber)){
    header('location: index.php?action=homepage');
   }
     


}     

require("templates/signUp.php");
}    } 

?>

