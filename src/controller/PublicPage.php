<?php


require_once('src/model/post.php');
require_once('src/model/user.php');

class PublicPage{
    public function execute(){
       require ("templates/bar.php");
       $style="css/home.css";
        $tiltle="homepage";
$tiltle="Page d'accueil";
$handleUsers=new handleUsers();
$handleUsers->connection=new DatabaseConnection();
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
        $search='';
        if (isset($_POST['search'])) {
            $search = $_POST['searchtext'];
       

        }
        $posts=$handlePosts->getPosts('-1',$search);
        require('templates/PublicPage.php');

        




    }
    

}