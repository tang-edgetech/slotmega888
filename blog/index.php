<?php
$page_name = "Blog";
$page_slug = 'blog';
$page_thumbnail = "https://example.com/image.jpg";
include '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Slot Mega888 App ᐉ Blog</title>
        <base href="../<?php echo $page_slug;?>">
        <?php include '../inc/stylesheet.php';?>
    </head>
    <body>
        <?php include '../inc/navbar.php';?>
        <main class="app" id="app">
            <section class="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-11 col-xl-6 col-xxl-5 px-4">
        <?php
        $posts = json_decode(file_get_contents($site_base_url.'/data/blogs.json'), true);
        echo "<h1>Blog Listing</h1><ul>";
        foreach ($posts as $post) {
            echo "<li><a href='".$site_base_url."blog/" . urlencode($post['slug']) . "'>" . htmlspecialchars($post['title']) . "</a></li>";
        }
        echo "</ul>";
        ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include '../inc/footer.php';?>
        <?php include '../inc/popup-share-this.php';?>
    </body>
</html>
