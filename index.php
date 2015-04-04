<?php
require_once("configuration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require('meta.php'); ?>
        <script src="assets/scripts/itemhandler.js"></script>
        <script src="libs/jquery.ba-hashchange.min.js"></script>
        <script src="assets/scripts/general.js"></script>
        <script src="libs/markdown.min.js"></script>
        <title><?php region('Name') ?></title>
        
    </head>
    <body>
        <?php require('header.php'); ?>
        <div class="container">
            <div class="content" id="content">
            </div>
        </div>
        <?php require('footer.php'); ?>
  </body>
</html>