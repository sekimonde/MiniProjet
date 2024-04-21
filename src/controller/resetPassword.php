
<?php
require_once('src/model/user.php');
class resetPassword{
    public function execute(){
        if (isset($_POST['send'])) {
            $email=$_SESSION["email"];
            $password=$_POST["nouveauPassword"];
            $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $user=$handleUsers->getUser($email);
        
        $password_hash = password_hash(($password), PASSWORD_DEFAULT);
        $handleUsers->updatePassword($user->id,$password_hash);
        

     header('Location:index.php?action=homepage');
       }






        require("templates/resetPassword.php");
        }}
?>