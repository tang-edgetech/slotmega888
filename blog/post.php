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

                        // Step 1: Get full request URI
                        $uri = $_SERVER['REQUEST_URI']; // e.g., /blog/blog-1 or /blog/blog-1/
                        
                        // Step 2: Remove query string if present
                        $uri = strtok($uri, '?');

                        // Step 3: Extract the slug
                        if( isLocalhost() ) {
                            $base = '/slotmega888/blog/';
                        }
                        else {
                            $base = '/blog';
                        }
                        $slug = '';

                        if (strpos($uri, $base) === 0) {
                            $slug = trim(substr($uri, strlen($base)), '/'); // e.g. blog-1
                        }

                        // Step 4: Load posts and find match
                        $posts = json_decode(file_get_contents($site_base_url . 'data/blogs.json'), true);
                        $found = null;

                        foreach ($posts as $post) {
                            if ($post['slug'] === $slug) {
                                $found = $post;
                                break;
                            }
                        }

                        // Step 5: Output content
                        if ($found) {
                            echo "<h1>" . htmlspecialchars($found['title']) . "</h1>";
                            echo "<p><em>" . htmlspecialchars($found['date']) . "</em></p>";
                            echo $found['content'];
                        } else {
                            echo "<h1>404 - Post Not Found</h1>";
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
