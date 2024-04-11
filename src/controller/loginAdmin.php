
<?php
require_once('src/model/admin.php');
class loginAdmin{

    public function execute(){
        $bar="";
        if(!isset($_SESSION)){
            session_start();
        }
        if (isset($_POST['Login'])) {
            $email=$_POST["email"];
            $password=$_POST["password"];
            $handleAdmins=new handleAdmins();
        $handleAdmins->connection=new DatabaseConnection();
        $admin=$handleAdmins->login($email,$password);
        if ($admin!=false) {
            $_SESSION['id'] = $admin->id;
            header('Location:admin.php?action=users');
        }
        else{
            throw new Exception("vous n'est pas un administrateur");
        }}
          
          










        require("templates/LoginPage.php");
        }}
?>