<?php $style="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css";?>
<?php 


$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
    $state="logout";
if (isset($_POST['dashboard'])) {
        header('Location: index.php');
        $_SESSION['page']="profil";
    }
elseif (isset($_POST['logout'])) {
        session_destroy();
        header('Location:index.php');
        
    } 
}else{
    $state="login";}
    if (isset($_POST['login'])) {
    header('Location:index.php');
    $_SESSION['page']="login";
}?>
<?php
if (isset($_POST['homepage'])) {
    header('Location: index.php');
    $_SESSION['page']="home";
}?>







<?php ob_start(); ?>
<form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" >
   
        <input type="submit" name="homepage" value="homepage" >
  
     
        <input type="submit" name="dashboard" value="profil" >
   
      
    <input type="submit" name=<?php echo $state?> value=<?php echo $state?>>
   
        <input type="submit" name="addPost" value="addPost" >

<?php $bar = ob_get_clean(); ?>



