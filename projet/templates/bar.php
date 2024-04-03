<?php $style="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css";?>
<?php 


$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
    $state="logout";
    
}else{
    $state="login";}?>
<?php
if (isset($_POST['homepage'])) {
    header('Location: index.php');
    $_SESSION['page']="home";
}
elseif (isset($_POST['dashboard'])&&$identity!=null) {
    header('Location: index.php');
    $_SESSION['page']="profil";
}
elseif (isset($_POST['addPost'])&&$identity!=null) {
    header('Location:index.php');
    $_SESSION['page']="addPost";
}
elseif (isset($_POST['logout'])) {
    session_destroy();
    header('Location:index.php');
    
}
elseif (isset($_POST['login'])||isset($_POST['dashboard']) ||isset($_POST['addPost'])) {
    header('Location:index.php');
    $_SESSION['page']="login";
}


?>






<?php ob_start(); ?>
<form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" >
   
        <input type="submit" name="homepage" value="homepage" >
  
     
        <input type="submit" name="dashboard" value="profil" >
   
      
    <input type="submit" name=<?php echo $state?> value=<?php echo $state?>>
   
        <input type="submit" name="addPost" value="addPost" ></form>

<?php $bar = ob_get_clean(); ?>



