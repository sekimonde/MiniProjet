





    <?php $tiltle="Page d'accueil";?>


<?php ob_start(); ?>

        <h2>Welcome ! Ikrili your oppotunity</h2>
    </div>
    

       
        <h3>Liste des Appartements</h3>
    <ul class="appartments-list">
        <?php foreach($posts as $post){?>
            <main>
                      <div class="row1">
                       <img src="/projet/picture/App/<?php echo $post->picture?>" alt="Appartement 1" height="300" width="500">
                       </div>
                       <div class="row2">
                      <div class="title">
                       <h4><?=$post->name?></h4>
                      </div>
           
                    
                     <div class="description"> 
                        <p><?=$post->description?></p> 
                     </div>
                     <?php $user=$handleUsers->getUser1($post->idUser) ; ?>
                   <label class="description"> 
                   <p>Numero de telephone du propriétaire: <?=$user->phoneNumber?></p>
                   </label>
                     <label class="price"> 
                       <p>Prix: $<?=$post->price?>/mois</p>
                   </label></div>
                  
            </main>
             <div class="space"></div>
           <?php }?>
        
    </ul>
    
    <?php $content = ob_get_clean(); ?>
    <?php require "layout.php"?>