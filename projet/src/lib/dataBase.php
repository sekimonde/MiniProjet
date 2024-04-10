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




public function insertData($nom, $prenom, $email, $password, $image, $phoneNumber)
{
    try {
        $pdo = $this->getConnection();

    
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
            echo "L'email ou numero de telephone est déjà utilisé.";
        } else {
            // Other database error
            echo "Erreur lors de l'insertion des données: " . $e->getMessage();
        }
    }
}
public function login($email, $password)
{
try {
    $pdo = $this->getConnection();

    // Récupérer le hachage du mot de passe de l'utilisateur à partir de la base de données
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email);
    $query->execute();
    $user = $query->fetch();

    // Vérifier si un utilisateur correspondant a été trouvé
    if ($user && password_verify($password, $user['password'])) {
        return $user; // L'utilisateur existe et les mots de passe correspondent, retourne les informations de l'utilisateur
    } else {
        return false; // Aucun utilisateur trouvé avec l'email donné ou mot de passe incorrect
    }

} catch (PDOException $e) {
    echo "Erreur lors de la recherche de l'utilisateur: " . $e->getMessage();
    return false; // En cas d'erreur, retourne false
}
}

}
?>