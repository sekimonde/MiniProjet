<?php require "bar.php"?>

<?php $tiltle="Page d'accueil";?>


<?php ob_start(); ?>

        <h1>Page d'accueil</h1>
        
        <h1>Liste des Appartements</h1>
    <ul class="appartments-list">
        <?php for($i=0;$i<=9;$i++){?>
        <li class="appartment">
            <h2>Appartement 1</h2>
            <img src="/projet/picture/App/app<?php echo $i.".jpg"?>" alt="Appartement 1" height="300" width="500">
            <p>Description: Appartement moderne avec vue sur la mer</p>
            <p>Prix: $1500/mois</p>
        </li><?php }?>
       
    </ul>
    <?php $content = ob_get_clean(); ?>
    <?php require "layout.php"?>
