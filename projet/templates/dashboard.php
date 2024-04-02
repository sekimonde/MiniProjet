<?php require "bar.php"?>
<?php $style="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css";?>
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
<?php require "layout.php"?>