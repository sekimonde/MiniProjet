







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
            <thead>
                <tr>
                    <th>banned users</th>
                    <th>unbanned users</th>
                    
                </tr>
            </thead>
            <tbody>
            <form method="POST" >
            <?php $i=0;while(isset($bannedusers[$i])||isset($unbannedusers[$i])){ ?>
            <tr><?php if(isset($bannedusers[$i])){ $user=$bannedusers[$i];?>
                    <td><?= $user->email ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black; 
                    " name="unban<?=$user->id ?>" type="submit"><i class="fa-solid fa-check"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black;
                     " name="delete<?=$user->id ?>" type="submit"><i class="fa-solid fa-trash"></i></button>
                    <?php }else{
                        ?><td></td><?php } ?>

            <?php if(isset($unbannedusers[$i])){$user=$unbannedusers[$i]; ?>         
            <td><?= $user->email ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black; "
             name="ban<?=$user->id ?>" type="submit"><i class="fa-solid fa-ban"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black; " 
             name="delete<?=$user->id ?>" type="submit"><i class="fa-solid fa-trash"></i></button></td>
            <?php }?>
                </tr>
            
        <?php $i++;}?></form>
               
            </tbody>
        </table>
    </div>
    <?php $content = ob_get_clean(); 
    require("templates/layout.php");?> 
