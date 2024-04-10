<?php
require_once('src/model/post.php');
class addPost{
   

    public function execute(){
      if(!isset($_SESSION)){
        session_start();}
      
 $style="";


require("templates/bar.php");
$title="addPost";
$content="";



        $name = $price = $body = '';
        $nameErr = $priceErr = $bodyErr = '';
       
        $handlePosts=new handlePosts();
        $handlePosts->connection=new DatabaseConnection();
      $idUser=$_SESSION['identity'];
        


  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

 if(isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
      } else {
       
        $name = filter_input(
          INPUT_POST,
          'name',
          FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
      }
    
      if (empty($_POST['price'])||(!is_numeric($_POST['price']))) {
        $priceErr = 'price is required';
      } else {
    
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
      }
    
    
      if (empty($_POST['body'])) {
        $bodyErr = 'Body is required';
      } else {
    
        $body = filter_input(
          INPUT_POST,
          'body',
          FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
      }
    
    }
   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
   
 $i=random_int(0,1000000000000000000);
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $file_name=('app'.$i.'.'.$file_ext);
    $target_dir ="picture/App/$file_name";
  



    if(in_array($file_ext, $allowed_ext)) {
   
      if($file_size <= 1000000 && empty($nameErr) && empty($priceErr) && empty($bodyErr)){
        move_uploaded_file($file_tmp, $target_dir);
        $handlePosts->addPost($file_name,$name,$body,$price,$idUser);
        $message = '<p style="color: green;">post uploaded!</p>';
      }
      elseif($file_size <= 1000000) { 
        $message = '<p style="color: green;">File  can be uploaded!</p>';
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
 



  
        require("templates/addPost.php");}}
