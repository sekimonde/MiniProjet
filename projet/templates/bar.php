<?php $style="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css";?>
<?php 
session_start();

$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
    $state="logout";
    
}else{
    $state="login";}?>
<?php
if (isset($_POST['homepage'])) {
    header('Location: PublicPage.php');
}
elseif (isset($_POST['dashboard'])) {
    header('Location: dashboard.php');
}
elseif (isset($_POST['login'])) {
    header('Location: LoginPage.php');
}
elseif (isset($_POST['logout'])) {
    session_destroy();
    header('Location:PublicPage.php');
    
}
?>






<?php ob_start(); ?>
<form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" class="mt-4 w-75">
    <div class="mb-3">
        <input type="submit" name="homepage" value="homepage" class="btn btn-dark w-100">
      </div>
      <div class="mb-3">
        <input type="submit" name="dashboard" value="profil" class="btn btn-dark w-100">
      </div>
      <div class="mb-3">
    <input type="submit" name=<?php echo $state?> value=<?php echo $state?> class="btn btn-dark w-100">
      </div>

<?php $bar = ob_get_clean(); ?>


