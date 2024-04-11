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
 $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
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




if(isset($_POST['sendProfil'])) {
    if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
       
     $i=random_int(0,1000000000000000000);
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        $file_name=('image'.$i.'.'.$file_ext);
        $target_dir ="picture/image/$file_name";
      
    
    
    
        if(in_array($file_ext, $allowed_ext)) {
       
          if($file_size <= 1000000) { 
            move_uploaded_file($file_tmp, $target_dir);
            $handleUsers->updatePicture($idUser,$file_name);
            if($user->image!="default.jpg"){
                unlink("picture/image/$user->image");
            }
            header('Location: index.php?action=profil');

            
          }
            
           else {
            $message = '<p style="color: red;">File too large!</p>';
          }
        } else {
          $message = '<p style="color: red;">Invalid file type!</p>';
        }
       } else {
         $message = '<p style="color: red;">Please choose a file</p>';
       }
     

        

    }require('templates/profile.php');

}}