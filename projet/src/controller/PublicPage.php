<?php

require_once('src/model/post.php');

class PublicPage{
    public function execute(){
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $posts=$handlePosts->getPosts();
        require('templates/PublicPage.php');
    }

}