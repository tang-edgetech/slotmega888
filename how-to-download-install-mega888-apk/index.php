<?php
$blog_index = '03';
include '../inc/functions.php';
$post = json_decode(file_get_contents($site_base_url . 'data/blog-'.$blog_index.'.json'), true);
$page_title = "Blog - ".$post['title'];
$page_slug = $post['slug'];

$page_thumbnail = "https://example.com/image.jpg";
$meta_tags = $post['meta_tags'];
$markup_schema = $post['schema'];
$faq = $post['faq'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
                            echo "<p class='mb-4'>Published on: <em>" . $post['published_date'] . "</em></p>";
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
            
            <?php if( $faq ) { ?>
            <section class="" id="faq">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-11 col-xl-9 col-xxl-7 px-0 px-md-0">
                            <h2>Soalan Lazim (FAQ)</h2>
                            <div class="accordion" id="accordionFAQ">
                            <?php $i = 1;
                            foreach ( $faq as $item ) {
                                $title = $item['heading'];
                                $body = $item['body'];
                                if( $title && $body ) {
                                    $heading_class = 'accordion-button';
                                    $heading_expanded = 'true';
                                    $body_class = 'accordion-collapse collapse show';
                                    if( $i > 1 ) {
                                        $heading_class = 'accordion-button collapsed';
                                        $heading_expanded = 'false';
                                        $body_class = 'accordion-collapse collapse';
                                    }
                                    $index = str_pad($i, 2, "0", STR_PAD_LEFT);
                                    $body = convert_site_base_url($body);
                                    echo '<div class="accordion-item"><h3 class="accordion-header"><button class="'.$heading_class.'" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$index.'" aria-expanded="'.$heading_expanded.'" aria-controls="collapse'.$index.'">'.$title.'</button></h3><div id="collapse'.$index.'" class="'.$body_class.'" data-bs-parent="#accordionFAQ"><div class="accordion-body">'.$body.'</div></div></div>';
                                    $i++;
                                }
                            } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
        </main>
        <?php include '../inc/footer.php';?>
        <?php include '../inc/popup-share-this.php';?>
    </body>
</html>
