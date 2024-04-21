
<?php
$title="reset password";
$script="";
if(isset($bar)&&($bar)==""){}else{
    require("templates/bar.php");
}?>
<?php $style="css/login.css";?>
<?php ob_start(); ?>

<section>
        <div class="form-box">
            <div class="form-value">
              <form  method="post">
                    
              <div class="inputbox">
                        <input type="password" name="nouveauPassword" />
                        <label >Nouveau password</label>
                    </div>
                   
                   
             <button type="submit" name="send"> change password</button>
              <div class="register">
                <p>
                  
                </p>
              </div>
            </form>
          </div>
        </div>
      </form>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require "layout.php"?>