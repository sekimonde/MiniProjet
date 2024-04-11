<?php
require_once('src/model/user.php');
require_once("src/model/post.php");
require_once('src/model/admin.php');




class dashboardAdmin{
    public function execute(){

        if(!isset($_SESSION)){
            session_start();}
      $bar="";
        $style="css/admin.css";
 $tiltle="dashboard admin";
 $script="";
 $handleAdmins=new handleAdmins();
        $handleAdmins->connection=new DatabaseConnection();
 $admin=$handleAdmins->getadmin($_SESSION['id']);
        $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $bannedusers=$handleUsers->getUsers(0);
        $unbannedusers=$handleUsers->getUsers(1);
        $posts=$handlePosts->getPosts("-1");
        foreach($bannedusers as $user){
        if (isset($_POST["unban".$user->id])) {
            $handleUsers->updateCanPost($user->id,1);
            header('Location: admin.php?action=users');
        }
    elseif (isset($_POST["delete".$user->id])){
        $handleUsers->deleteUser($user->id);
            header('Location: admin.php?action=users');
    }}
    foreach($unbannedusers as $user){
        if (isset($_POST["ban".$user->id])) {
            $handleUsers->updateCanPost($user->id,0);
            header('Location: admin.php?action=users');
        }
    elseif (isset($_POST["delete".$user->id])){
        $handleUsers->deleteUser($user->id);
            header('Location: admin.php?action=users');
    }}
        require('templates/dashboardAdmin.php');

    }

}









?>