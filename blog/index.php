<?php
$page_name = "Blog";
$page_slug = 'blog';
$page_thumbnail = "https://example.com/image.jpg";
include '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en-MY">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Branch Us ᐉ Blog</title>
        <base href="../<?php echo $page_slug;?>">
        <?php include '../inc/stylesheet.php';?>
    </head>
    <body>
        <?php include '../inc/navbar.php';?>
        <main class="app" id="app">
            <?php 
            include '../inc/quick-enquiry.php';
            
            $posts = json_decode(file_get_contents($site_base_url.'/data/blogs.json'), true);
            echo "<h1 class='px-4 px-md-0 mb-4'>Blog Listing</h1>";
            include '../inc/template-post-grid.php';
            ?>
        </main>
        <?php include '../inc/footer.php';?>
        <?php include '../inc/popup-share-this.php';?>
    </body>
</html>
