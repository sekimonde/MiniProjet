
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <?php if($style!="css/admin.css"){?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"><?php }?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php if($script!=""){echo $script;}?>
    <?php if($style!=""){?>
<link rel="stylesheet" href=<?=$style;?>><?php }?>
</head>
<body>
<?php if($bar!=""){echo $bar;}?>
    <?php echo $content; ?>
    
</body>
</html>