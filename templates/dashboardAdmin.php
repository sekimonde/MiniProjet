<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashbord</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li class="profile">
                <div class="img-box">
                    <img src="../picture/image/default.jpg" alt="">
                </div>
                <h2>Oussema Bouchaala</h2>
            </li>
            <li>
                <a class="active" href="">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            <li class="log-out" >
                <a href="">
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
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>user</p>
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
                <i class="fa-solid fa-user-lock"></i>
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
                    <td><?= $user->email ?><button style="background-color: black; 
                    " name="unban<?=$user->id ?>" type="submit">unban</button><button style="background-color: black;
                     " name="delete<?=$user->id ?>" type="submit">delete</button>
                    <?php }else{
                        ?><td></td><?php } ?>

            <?php if(isset($unbannedusers[$i])){$user=$unbannedusers[$i]; ?>         
            <td><?= $user->email ?><button style="background-color: black; "
             name="ban<?=$user->id ?>" type="submit">ban</button><button style="background-color: black; " 
             name="delete<?=$user->id ?>" type="submit">delete</button></td>
            <?php }?>
                </tr>
            
        <?php $i++;}?></form>
               
            </tbody>
        </table>
    </div>
</body>
</html>



 -->















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
                <a class="active" href="admin.php?action=users">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
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
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>user</p>
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
                <i class="fa-solid fa-user-lock"></i>
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
                    " name="unban<?=$user->id ?>" type="submit">unban</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black;
                     " name="delete<?=$user->id ?>" type="submit">delete</button>
                    <?php }else{
                        ?><td></td><?php } ?>

            <?php if(isset($unbannedusers[$i])){$user=$unbannedusers[$i]; ?>         
            <td><?= $user->email ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black; "
             name="ban<?=$user->id ?>" type="submit">ban</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: black; " 
             name="delete<?=$user->id ?>" type="submit">delete</button></td>
            <?php }?>
                </tr>
            
        <?php $i++;}?></form>
               
            </tbody>
        </table>
    </div>
    <?php $content = ob_get_clean(); 
    require("templates/layout.php");?> 
