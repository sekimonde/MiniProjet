<?php



require_once('src/model/user.php');

class profile{
    public function execute(){
        $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $user=$handleUsers->getUser1("1");
        $posts=$handlePosts->getPosts("1");
        require('templates/profile.php');

    }

}