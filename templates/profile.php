

<?php ob_start();?>


<div>
        <h2>buildings</h2>
        
        <?php foreach($posts as $post){?>
       
       <h2><?=$post->name?></h2>
<div><div><img src="picture/App/<?= $post->picture?>" alt="Appartement 1" height="300" width="500"></div>





            <div><p>Description:<?=$post->description?></p>
            <p>Prix: $<?=$post->price?>/mois</p>
            <form method="POST" >
   <button type="submit" name=<?=$post->id?>><i class="fa-solid fa-trash"></i></button> </form></div>
            </div>
            
            
        <?php }?>
      
       
       
       
 
        
    </div>
<?php $building = ob_get_clean(); ?>  
<?php if($posts==[]){
    $building="";
}?>
<?php ob_start(); ?>
<div class="container">
    <h1>User Profile</h1>
    <div class="profile-info">
        <img src="picture/image/<?=$user->image?>" alt="Profile Picture">
        
        <div class="profile-details">
            <h2><?php echo $user->nom." ".$user->prenom?></h2>
            <p><span>Email:</span> <?=$user->email?></p>
            <p><span>Phone Number:</span> <?=$user->phoneNumber?></p>
            
        </div>
    </div>
    <form  method="post" enctype="multipart/form-data"><br>
    <input type="file" name="upload">
  <div class="mb-3">
  <?php echo $message ?? null; ?>
        <input type="submit" name="sendProfil" value="changer votre image de profil" class="btn btn-dark w-100">
      </div>
    <?=$building?>
    

    
<?php $content = ob_get_clean(); ?>

<?php require "layout.php"?> 


<?php ?>



