

<?php
require("bar.php"); $tiltle="Ikrili";?>
<?php $style="/projet/css/index.css";?>
<?php ob_start(); ?>
<h1>Ikrili</h1>
  <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="post">
  <label>Username</label><br/>
  <input type="text" name="username"><br/>
  <label>Password</label><br/>
  <input type="password" name="password"><br/>
  <input type="submit"  name="Login" value="Login">
</form>
<div>dont have an account sign up now</div>
<a href="signUp.php">sign up</a>
<?php $content = ob_get_clean(); ?>

<?php require "layout.php"?>
