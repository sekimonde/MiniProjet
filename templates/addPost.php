

<?php ob_start(); ?>
  <main>
 <form  method="post" enctype="multipart/form-data"><br>
   <div class="mb-3">
    
        <label for="name" class="form-label">Title</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
          'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
          Please provide a valid name.
        </div>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="price" class="form-control <?php echo !$priceErr ?:
          'is-invalid'; ?>" id="price" name="price" placeholder="Enter your price" value="<?php echo $price; ?>">
    <div id="validationServerFeedback" class="invalid-feedback">
          Please provide a valid price.
        </div>  
    </div>
      <div class="mb-3">
        <label for="body" class="form-label">Description</label>
        <textarea class="form-control <?php echo !$bodyErr ?:
          'is-invalid'; ?>" id="body" name="body" placeholder="Enter your description"><?php echo $body; ?></textarea>
       <div id="validationServerFeedback" class="invalid-feedback">
          Please provide a valid description.
        </div>  
    </div>
  <seki>
   Select image to upload: </seki>
  <input type="file" class="file"name="upload">
  <div class="mb-3">
  <?php echo $message ?? null; ?>
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
      
</form>
  </main>
<?php $content = ob_get_clean(); ?>
<?php require("templates/layout.php");?>