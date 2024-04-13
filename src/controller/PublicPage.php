<?php


require_once('src/model/post.php');
require_once('src/model/user.php');

class PublicPage{
    public function execute(){
       require ("templates/bar.php");
        $style="";
        $tiltle="homepage";
$tiltle="Page d'accueil";
$handleUsers=new handleUsers();
$handleUsers->connection=new DatabaseConnection();
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $posts=$handlePosts->getPosts();
        require('templates/PublicPage.php');
    }

}