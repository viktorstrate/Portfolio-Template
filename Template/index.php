<?php
require_once("configuration.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <title><?php region('Name') ?></title>
        <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='stylesheet.css' rel='stylesheet' type='text/css' >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="//cmmedia.a.ssl.fastly.net/bca287819ca0ab6dfc26/25066709/16x16-c.png">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/scripts/itemhandler.js"></script>
        <script src="libs/jquery.ba-hashchange.min.js"></script>
        <script src="assets/scripts/general.js"></script>
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