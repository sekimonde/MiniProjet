

<?php $tiltle="Page d'accueil";?>


<?php ob_start(); ?>

        <h1>Page d'accueil</h1>
        
        <h1>Liste des Appartements</h1>
    <ul class="appartments-list">
        <?php foreach($posts as $post){?>
        <li class="appartment">
            <?php $user=$handleUsers->getUser1($post->idUser) ; ?>
            <h2><?=$post->name?></h2>
            <img src="/projet/picture/App/<?php echo $post->picture?>" alt="Appartement 1" height="300" width="500">
            <p><?=$post->description?></p>
            <p>Prix: $<?=$post->price?>/mois</p>
            <p>Numero de telephone du propriétaire: <?=$user->phoneNumber?></p>
        </li><?php }?>
       
    </ul>
    <?php $content = ob_get_clean(); ?>
    <?php require "layout.php"?>
