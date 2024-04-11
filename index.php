<?php

require_once('./src/controller/addPost.php');
require_once('./src/controller/PublicPage.php');
require_once('./src/controller/profil.php');
require_once('./src/controller/login.php');
require_once('./src/controller/signup.php');
require_once('./src/controller/code.php');
try{
    
    if(!isset($_SESSION)){
        session_start();}
    $identity = null;
    if (isset($_SESSION['identity'])) {
        $identity = $_SESSION['identity'];
        $state="logout";
        
    }else{
        $state="login";}

if(isset($_GET['action'] )&& $_GET["action"]!=''){
if($_GET["action"]=='profil'&&$identity!=null){
    (new profile())->execute();
}elseif($_GET["action"]== 'addPost'&&$identity!=null){
    (new addPost())->execute();}
elseif($_GET["action"]=='addPost'||$_GET["action"]=='profil'||$_GET["action"]=='login'){
    (new login())->execute();
}
elseif($_GET["action"]=='signup'){
    (new signUp())->execute();
}
elseif($_GET["action"]=='code'){
    (new Code())->execute();}

elseif($_GET["action"]=='homepage'){
    (new PublicPage())->execute();
}

else{
    throw new Exception("la page que vous chercher n'existe pas");}}
else{
    (new PublicPage())->execute();}}
    catch(Exception $e){
        
        $errorMessage=$e->getMessage();
        

    require("templates/error.php");}
    


