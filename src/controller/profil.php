<?php

require_once("src/model/post.php");

require_once('src/model/user.php');

class profile{
    public function execute(){
        if(!isset($_SESSION)){
            session_start();}
        require ("templates/bar.php");
        $style="css/profile.css";
 $tiltle="profil";
 $idUser=$_SESSION['identity'];
        $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $user=$handleUsers->getUser1($idUser);
        $posts=$handlePosts->getPosts($idUser);
        foreach($posts as $post){
        if (isset($_POST[$post->id])) {
            $handlePosts->deletePost($post->id);
            unlink("picture/app/$post->picture");
            header('Location: index.php?action=profil');
        }}
        require('templates/profile.php');

    }

}