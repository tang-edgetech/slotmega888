<?php
$page_name = "Home";
$page_slug = '';
$page_thumbnail = "https://example.com/image.jpg";
include 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="http://127.0.0.1/websites/ln_tang_edgetech/slotmega888/">
        <title><?php echo $page_title;?></title>
        <?php include 'inc/stylesheet.php';?>
    </head>
    <body>
        <?php include 'inc/navbar.php';?>
        <main class="app" id="app">

        </main>
        <?php include 'inc/footer.php';?>
        <?php include 'inc/popup-share-this.php';?>
    </body>
</html>