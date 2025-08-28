<?php
include '../inc/functions.php';
$uri = $_SERVER['REQUEST_URI'];

$uri = strtok($uri, '?');

if( isLocalhost() ) {
    $base = '/branch-us/blog/';
}
else {
    $base = '/blog';
}
$slug = '';

if (strpos($uri, $base) === 0) {
    $slug = trim(substr($uri, strlen($base)), '/');
}

$posts = json_decode(file_get_contents($site_base_url . 'data/blogs.json'), true);
$found = null;
foreach ($posts as $post) {
    if ($post['slug'] === $slug) {
        $found = $post;
        break;
    }
}

if ($found) {
    $page_name = "Blog - ".$found['title'];
    $page_slug = $found['slug'];
}
else {
    $page_name = "404 - Blog Not Found";
    $page_slug = '404';
}
$page_thumbnail = "https://example.com/image.jpg";
$meta_tags = $found['meta_tags'];
$markup_schema = $found['schema'];
?>
<!DOCTYPE html>
<html lang="en-MY">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mega888APK ᐉ Blog</title>
        <?php
        if( $meta_tags ) { 
            foreach( $meta_tags as $tag ) {
                echo convert_site_base_url($tag)."\r\n";
            }
        }
        ?>
        <base href="../<?php echo $page_slug;?>">
        <?php include '../inc/stylesheet.php';?>
        <?php if( $markup_schema ) {
            foreach( $markup_schema as $key => $tag) {
                echo "<script type=\"application/ld+json\" id=\"$key\">\n";
                echo json_encode($tag, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
                echo "\n</script>\n";
            }
        } ?>
    </head>
    <body>
        <?php include '../inc/navbar.php';?>
        <main class="app" id="app">
            <section class="single single-post">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-11 col-xl-9 col-xxl-7 px-0 px-md-0">
                        <?php
                        if ($found) {
                            echo "<h1 class='px-4 px-md-0 mb-2'>" . $found['title'] . "</h1>";
                            echo "<p class='mb-4'>Published on: <em>" . $found['date'] . "</em></p>";
                            echo "<div class='text-editor'>";
                            echo convert_site_base_url($found['content']);
                            echo "</div>";
                        }
                        else {
                            echo "<h1>Blog Not Found!</h1>";
                        }
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
