
<?php
require_once('src/model/user.php');
class login{
    public function execute(){
        if (isset($_POST['Login'])) {
            $email=$_POST["email"];
            $password=$_POST["password"];
            $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $user=$handleUsers->login($email,$password);
        if ($user!=false) {
            $_SESSION['identity'] = $user->id;
            header('Location:index.php?action=homepage');
        }
        else{
            throw new Exception("vous n'avez pas de compte");
        }}
          
          










        require("templates/LoginPage.php");
        }}
?>