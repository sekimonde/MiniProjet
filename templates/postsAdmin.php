

<?php ob_start(); ?>
    <div class="menu">
        <ul>
            <li class="profile">
                <div class="img-box">
                    <img src="picture/image/<?= $admin->image ;?>" alt="image profil">
                </div>
                <h2><?= ($admin->prenom)." ".($admin->nom) ;?></h2>
            </li>
            <li>
                <a href="admin.php?action=users">
                    <i class="fas fa-user-group"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li>
                <a href="admin.php?action=posts">
                    <i class="fas fa-pen"></i>
                    <p>Posts</p>
                </a>
            </li>
            
            <li class="log-out" >
                <a href="admin.php?action=logout">
                    <i class="fas fa-sign-out"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="title-info">
            <p>dashboard</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <div class="data-info">
            <div class="box">
            <i class="fa-solid fa-user-group"></i>
                <div class="data">
                    <p>users</p>
                    <span><?= count($bannedusers)+count($unbannedusers);?></span>
                </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-building"></i>
                <div class="data">
                    <p>buildings</p>
                    <span><?= count($posts)?></span>
                </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-user-slash"></i>
                <div class="data">
                    <p>banned users</p>
                    <span><?= count($bannedusers)?></span>
                </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-user-check"></i>
                <div class="data">
                    <p>unbanned users</p>
                    <span><?= count($unbannedusers)?></span>
                </div>
            </div>
        </div>
   
        <table>
           
            <tbody>
            <?php foreach($posts as $post){?>
                <tr><form method="POST" >
                
                    <td> 
        
            <?php $user=$handleUsers->getUser1($post->idUser) ; ?>
            <h2><?=$post->name?></h2>
            <img src="/projet/picture/App/<?php echo $post->picture?>" alt="Appartement 1" height="300" width="500"><br>
            <p><?=$post->description?></p><br>
            <p>Prix: $<?=$post->price?>/mois</p><br>
            <h2>information sur le propriétaire:</h2><br>
            <p><?php echo $user->nom." ".$user->prenom?></p><br>
            <p><span>Email:</span> <?=$user->email?></p><br>
            <p><span>Phone Number:</span> <?=$user->phoneNumber?></p>
           
           
           <br><button style="background-color: black;
                     " name="delete<?=$post->id ?>" type="submit"><i class="fa-solid fa-trash"></i></button>
        </li><?php }?> </form></td>
                    
                </tr>
              
               
            </tbody>
        </table>
    </div>
    <?php $content = ob_get_clean(); 
    require("templates/layout.php");?> 
