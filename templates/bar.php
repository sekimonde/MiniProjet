<?php 

$script="";



if(!isset($_SESSION)){
    session_start();}
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
    $state="logout";
    
}else{
    $state="login";}


if (isset($_POST['homepage'])) {
    header('Location: index.php?action=homepage');

}
elseif (isset($_POST['dashboard'])) {
    header('Location: index.php?action=profil');

}
elseif (isset($_POST['addPost'])) {
    header('Location:index.php?action=addPost');

}

elseif (isset($_POST['login'])) {
    header('Location:index.php?action=login');

}
elseif (isset($_POST['logout'])) {
    session_destroy();
    header('Location:index.php?action=homepage');
    
}



?>






<?php ob_start(); ?>
<form method="POST" ?>
   
        <input type="submit" name="homepage" value="homepage" >
  
     
        <input type="submit" name="dashboard" value="profil" >
   
      
    <input type="submit" name=<?php echo $state?> value=<?php echo $state?>>
   
        <input type="submit" name="addPost" value="addPost" ></form>

<?php $bar = ob_get_clean(); ?>



