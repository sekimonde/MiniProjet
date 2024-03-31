<?php require "./templates/bar.php"?>

<?php $tiltle="Page d'accueil";?>

<?php $style="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css";?>
<?php ob_start(); ?>

        <h1>Page d'accueil</h1>
        
        <h1>Liste des Appartements</h1>
    <ul class="appartments-list">
        <li class="appartment">
            <h2>Appartement 1</h2>
            <img src="App/app.jpg" alt="Appartement 1" height="300" width="500">
            <p>Description: Appartement moderne avec vue sur la mer</p>
            <p>Prix: $1500/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 2</h2>
            <img src="App/app1.jpg" alt="Appartement 2"height="300" width="500">
            <p>Description: Appartement lumineux avec terrasse</p>
            <p>Prix: $1200/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 3</h2>
            <img src="App/app.jpg" alt="Appartement 3"height="300" width="500">
            <p>Description: Studio confortable dans le centre-ville</p>
            <p>Prix: $800/mois</p>
        </li>
        <!-- Ajoutez les emplacements des images pour les autres appartements -->
        <li class="appartment">
            <h2>Appartement 4</h2>
            <img src="App/app3.webp" alt="Appartement 4" height="300" width="500">
            <p>Description: Appartement spacieux avec jardin</p>
            <p>Prix: $1800/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 5</h2>
            <img src="App/app5.jpg" alt="Appartement 5"height="300" width="500">
            <p>Description: Appartement de style loft avec vue panoramique</p>
            <p>Prix: $2000/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 6</h2>
            <img src="App/app6.jpg" alt="Appartement 6" height="300" width="500">
            <p>Description: Appartement rénové près des transports en commun</p>
            <p>Prix: $1000/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 7</h2>
            <img src="App/app7.jpg" alt="Appartement 7"height="300" width="500">
            <p>Description: Duplex élégant avec balcon</p>
            <p>Prix: $2200/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 8</h2>
            <img src="App/app8.jpg" alt="Appartement 8"height="300" width="500">
            <p>Description: Appartement meublé avec parking privé</p>
            <p>Prix: $1700/mois</p>
        </li>
        <li class="appartment">
            <h2>Appartement 9</h2>
            <img src="App/app9.jpg" alt="Appartement 9"height="300" width="500">
            <p>Description: Appartement ensoleillé dans un quartier calme</p>
            <p>Prix: $1100/mois</p>
        </li>
    </ul>
    <?php $content = ob_get_clean(); ?>
    <?php require "./templates/layout.php"?>
