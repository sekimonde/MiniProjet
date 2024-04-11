
<?php
$title="code";
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
                        
                        <input type="text"  name="email"/>
                        <label >Email</label>
                    </div>
                   
                   
             <button type="submit" name="sendlink"> send link</button>
              <div class="register">
                <p>
                 <?=$message;?>  
                </p>
              </div>
            </form>
          </div>
        </div>
      </form>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require "layout.php"?>
