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
<div class="search-container">

                 <input type="text" placeholder="Search.." name="search" class="rech">
                   <button type="submit"class="ii"><i class="fa fa-search"></i></button>
              </div>

<?php $search= ob_get_clean();?>


<?php ob_start(); ?>
<div class="container">
<form method="POST" ?>
         
            <header>
               <a href="#" class="logo"> Ikrili </a>
      
       <?php  echo $search;?>
     

            <ul>
                <input class="submit" type="submit" name="homepage" value="Home" >
      
       
                <input class="submit" type="submit" name="dashboard" value="Profil" >
    
                <input class="submit" type="submit" name="addPost" value="Poster" >
                <label class="bar"></label>
                <input class="submit" type="submit" name=<?php echo $state?> value=<?php echo $state?>> 
            </ul>
         </header>
    </form>
        </div> 
<?php $bar = ob_get_clean(); ?>