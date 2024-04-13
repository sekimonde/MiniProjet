<?php $title = "erreur";
$style="./css/error.css"; 
$script="";
if(isset($bar)&&($bar)==""){}
else{
    require("templates/bar.php");
}

?>


<?php ob_start(); ?>
<main>
<h1>Attention !!!</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
</main>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>