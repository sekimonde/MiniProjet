<?php
session_start();
if (isset($_POST['Login'])) { 
  $_SESSION['identity']=1;
header('Location: /projet/PublicPage.php');
}
  
  ?>
<?php $bar=""?>
<?php $tiltle="Ikrili";?>
<?php $style="index.css";?>
<?php $tiltle="dasboard";$content="";?>
<?php ob_start(); ?>
  <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="post">
  <label>Username</label><br/>
  <input type="text" name="username"><br/>
  <label>Password</label><br/>
  <input type="password" name="password"><br/>
  <input type="submit"  name="Login" value="Login">
</form>
<?php $content = ob_get_clean(); ?>

<?php require "./templates/layout.php"?>
