<?php
class login{
    public function execute(){
        if (isset($_POST['Login'])) { 
            $_SESSION['identity']=1;
            $_SESSION['page']="home";
          header('Location:index.php');
          }
        require("templates/LoginPage.php");
    }
}