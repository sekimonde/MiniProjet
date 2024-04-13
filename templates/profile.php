

<?php ob_start();?>


         <div class="build">
        <h2>buildings</h2>
        </div>
        <ul class="appartments-list">
        <?php foreach($posts as $post){?>
       <main>
     <div class= "row1">        
             <img src="picture/App/<?= $post->picture?>" alt="Appartement 1" height="300" width="500">
        </div>
        <div class="row2">
            <div class="title">
            <h4><?=$post->name?></h4>
            </div>
        <div class="description">
            <p>Description:<?=$post->description?></p>
        </div>
        <label class="price">
            <p>Prix: $<?=$post->price?>/mois</p>
        </label>
        <div class="delete">
            <form method="POST" >
          <button type="submit"class="del" name=<?=$post->id?>><i class="fa-solid fa-trash"></i></button> </form>
            </div>
       </div>
        </main> 
        <div class="space"></div>
        <?php }?>
      </ul>
       
       
       
 
        
    
<?php $building = ob_get_clean(); ?>  
<?php if($posts==[]){
    $building="";
}?>
<?php ob_start(); ?>
<div class="containe">
    <h1>Profil</h1>
    <div class="profile-info">
        <img src="picture/image/<?=$user->image?>" alt="Profile Picture">
        
        <div class="profile-details">
            <h2><?php echo $user->nom." ".$user->prenom?></h2>
            <p><span>Email:</span> <?=$user->email?></p>
            <p><span>Phone Number:</span> <?=$user->phoneNumber?></p>
            
        </div>
    </div>
    <form  method="post" class="fileprofil"enctype="multipart/form-data"><br>
    <div class="fil">
    <input type="file" name="upload">
    </div>
  <div class="mb-3">
  <?php echo $message ?? null; ?>
        <input type="submit" name="sendProfil" value="changer votre image de profil" class="btn">
    </div></form> </div>
    <?=$building?>
    

    
<?php $content = ob_get_clean(); ?>

<?php require "layout.php"?> 


<?php ?>



