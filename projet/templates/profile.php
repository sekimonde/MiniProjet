<?php require "bar.php"?>
<?php $style="css/profile.css";?>
<?php $tiltle="dasboard";$content="";?>

<?php ob_start(); ?>

<div class="profile-bio">
        <h2>buildings</h2>
        <ul class="appartments-list">
        <?php foreach($posts as $post){?>
        <li class="appartment">
            <h2><?=$post->name?></h2>
            <img src="/projet/picture/App/<?php echo $post->picture?>" alt="Appartement 1" height="300" width="500">
            <p><?=$post->description?></p>
            <p>Prix: $<?=$post->price?>/mois</p>
            <form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" >
   
        <input type="submit" name=<?=$post->id?> value="delete" ><?php }?>
       
        </li>
    </ul>
        
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
    <?=$building?>
    

    
<?php $content = ob_get_clean(); ?>

<?php require "layout.php"?> 


<?php if ($posts!=[] && isset($_POST[$post->id])) {
    $handlePosts->deletePost($post->id);
    
}?>



