<?php
require_once("configuration.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require('meta.php'); ?>
        <link rel="stylesheet" href="assets/css/contact.css" type="text/css" />
        <title><?php region('Name') ?> - Contact</title>
    </head>
    <body>
    <?php require_once('header.php'); ?>
    <div class="content" id="content">
        <?php form('Contact'); ?>
            <p>
                <input type="text" placeholder="Name" id="name" name="form[name]" required>
            </p>
            <p>
                <textarea name="form[message]" placeholder="Message" id="message" required></textarea>
            </p>
            <p>
                <button type="submit">Send</button>
            </p>
        </form>
        </div>
        <?php require_once('footer.php'); ?>
    </body>
</html>