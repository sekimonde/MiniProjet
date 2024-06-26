
<?php
require_once('./src/controller/dashboardAdmin.php');
require_once('./src/controller/loginAdmin.php');
require_once('./src/controller/postsAdmin.php');
try{
    $bar="";
    if(!isset($_SESSION)){
        session_start();
    }
    $id = -1;
    
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];}

if(isset($_GET['action'] )&& $_GET["action"]!=''){
    if($_GET["action"]=='users'&& $id!=-1){
        (new dashboardAdmin())->execute();

    }
   
    elseif($_GET["action"]=='posts'&& $id!=-1){
        (new PostsAdmin())->execute();
    }
    elseif($_GET["action"]=='posts'||$_GET["action"]=='users'){
        (new loginAdmin())->execute();
    }
    elseif($_GET["action"]=='logout'){
        session_destroy();
        
        (new loginAdmin())->execute();
    } 

    else{
        throw new Exception("la page que vous chercher n'existe pas");}



}
else{
    (new loginAdmin())->execute();
}}

catch(Exception $e){
    $errorMessage=$e->getMessage();
require("templates/error.php");}

?>