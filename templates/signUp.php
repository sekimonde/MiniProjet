






<?php $tiltle="Sign up";
$style="css/dark.css";
require("templates/bar.php");



?>
<?php ob_start(); ?>

<!-- <script  src="js/validation.js" defer> </script> -->

<?php $script = ob_get_clean(); ?>

<?php ob_start(); ?>


<form action="index.php?action=signup" method="post" id="form" >
  <section>
  <div class="form-box"> 
    <div class="form-value">
          <h2>New account </h2>
    <div class="inputbox">
  <input type="text" name="nom" id="nom" > 
     <div class="error"></div>
  <label>First name </label>

    </div>
    <div class="inputbox">
  <input type="text" name="prenom" id="prenom"  >
 <div class="error"></div>
  <label>Last name</label>
  
    </div>
    <div class="inputbox">
  <input type="text" name="phoneNumber" id="phoneNumber" >
  <div class="error"></div>
  <label>Phone Number</label>
    </div>
    <div class="inputbox">
  
  <input type="email" name="email" id="email" >
  <div class="error"></div>
  <label>Email count</label>

    </div>
    <div class="inputbox">

  <input type="password" name="password" id="password">
  <div class="error"></div>
  <label>Password</label>

    </div>
    <div class="inputbox">
 
  <input type="password" name="password_confirmation" id="password_confirmation">
  <div class="error"></div>
   <label> Repeat Password</label>
    </div>
  <button type="submit" name="submit">Create account</button>
  <div class="register">
    <p> I have a account 
         <a href="index.php?action=login" id="login">  Login </a>
    </p>
   </div>
  </div>
  </div>
</section>
</form>
    <?php $content = ob_get_clean(); ?>
    <?php require "layout.php"?>
