<?php $title = "erreur";$style="" ;
require ("templates/bar.php")?>


<?php ob_start(); ?>
<h1>Ikrili</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>