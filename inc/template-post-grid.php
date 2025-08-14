<?php
$posts = json_decode(file_get_contents(__DIR__."/../data/blogs.json"), true);
if( $posts ) {
    $default = array_slice($posts, 0, 3, true);
?>
<section class="">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-xl-9 col-xxl-7 px-4">
                <div class="post-container text-center">
                    <h3 class="mb-3">Blogs</h3>
                <?php
                echo '<div class="post-grid">';
                $i = 1;
                foreach ($default as $slug=>$post) {
                    $index = str_pad($i, 2, "0", STR_PAD_LEFT);
                    include 'template-post-grid-item.php';
                    $i--;
                }
                echo "</div>";
                ?>
                    <button type="button" class="btn btn-load-more d-inline-block mx-auto mt-4 text-center text-white text-hover-underline">Read More <i class="fa fa-plus ms-1"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
else {
    echo '<div class="">There is no blog found!</div>';
}
?>