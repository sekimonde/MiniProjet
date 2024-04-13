<?php class PostsAdmin{
    public function execute(){
        $bar="";
        $style="css/admin.css";
 $tiltle="post admin";
 $script="";

 $handleAdmins=new handleAdmins();
 $handleAdmins->connection=new DatabaseConnection();
 $id=$_SESSION['id'];
$admin=$handleAdmins->getadmin($id);
 $handleUsers=new handleUsers();
 $handleUsers->connection=new DatabaseConnection();
 $handlePosts=new handlePosts();
 $handlePosts->connection=new DatabaseConnection();
 $bannedusers=$handleUsers->getUsers(0);
 $unbannedusers=$handleUsers->getUsers(1);
 $posts=$handlePosts->getPosts("-1");
        
 foreach($posts as $post){
    if (isset($_POST["delete".$post->id])) {
        $handlePosts->deletePost($post->id);
        unlink("picture/app/$post->picture");
        header('Location: admin.php?action=posts');
    }}


        require("templates/postsAdmin.php");
    }
}