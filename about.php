<?php
require_once("configuration.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require('meta.php'); ?>
        <title><?php region('Name') ?> - About</title>
    </head>
    <body>
    <?php require_once('header.php'); ?>
    <div class="content" id="content">
        <?php echo cockpit("cockpit")->markdown(region('About'), $extra = false); ?>
        </div>
    <?php require_once('footer.php'); ?>
    
    </body>
</html>