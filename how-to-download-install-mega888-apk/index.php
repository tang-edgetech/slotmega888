<?php
$blog_index = '01';
include '../inc/functions.php';
$post = json_decode(file_get_contents($site_base_url . 'data/blog-'.$blog_index.'.json'), true);
$page_title = "Blog - ".$post['title'];
$page_slug = $post['slug'];

$page_thumbnail = "https://example.com/image.jpg";
$meta_tags = $post['meta_tags'];
$markup_schema = $post['schema'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Slot Mega888 App ᐉ Blog</title>
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
                        if ($post) {
                            echo "<h1 class='px-4 px-md-0 mb-2'>" . $post['title'] . "</h1>";
                            echo "<p class='mb-4'>Published on: <em>" . $post['date'] . "</em></p>";
                            echo "<div class='text-editor'>";
                            echo convert_site_base_url($post['content']);
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
