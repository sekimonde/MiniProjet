

<?php
$title="login page";
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
                    <h2>Login</h2>
                    <div class="inputbox">
                        
                        <input type="text"  name="email"/>
                        <label >Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" />
                        <label >Password</label>
                    </div>
                    <?php if(isset($forget)&&($forget== "")){}else{?>
                    <div class="forget">
                        <label >
                  <a href="index.php?action=code" id="1">I forgot the password</a></label
                >
              </div><?php }?>
             <button type="submit" name="Login"class="login"> Login</button>
             <?php if(isset($forget)&&($forget== "")){}else{?>
              <div class="register">
                <p>
                  If you don't have account  <a id="1" href="index.php?action=signup">Sign Up</a>
                </p>
              </div><?php }?>
            </form>
          </div>
        </div>
      </form>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require "layout.php"?>
