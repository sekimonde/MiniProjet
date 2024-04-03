<?php

require_once("src/model/post.php");

require_once('src/model/user.php');

class profile{
    public function execute(){
        $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $user=$handleUsers->getUser1("1");
        $posts=$handlePosts->getPosts("1");
        foreach($posts as $post){
        if (isset($_POST[$post->id])) {
            $handlePosts->deletePost($post->id);
            unlink("picture/app/$post->picture");
            header('Location: index.php');
        }}
        require('templates/profile.php');

    }

}