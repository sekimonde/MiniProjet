<?php
session_start();
require_once('./src/controller/PublicPage.php');
require_once('./src/controller/profil.php');
require_once('./src/controller/login.php');
if(isset($_SESSION['page'])){
if($_SESSION['page']=='profil'){
    (new profile())->execute();
}elseif($_SESSION['page']=='login'){
    (new login())->execute();
}

else{
    (new PublicPage())->execute();}}
else{
    (new PublicPage())->execute();}
    
    


