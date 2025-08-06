<?php
$posts = json_decode(file_get_contents($site_base_url.'/data/blogs.json'), true);

echo "<h1>Blog Listing</h1>";
if( $posts ) {
    echo '<div class="swiper post-grid">';
        echo '<div class="swiper-wrapper">';
        foreach ($posts as $post) {
            echo "<div class='swiper-slide post-item'><a href='".$site_base_url."blog/" . urlencode($post['slug']) . "'>" . htmlspecialchars($post['title']) . "</a>";
                echo "<div class='post-item-inner'>";
                    echo "<div class='post-thumbnail'>";
                        echo "<a href='".$site_base_url."blog/" . urlencode($post['slug']) . "'>";
                        if( $post['thumbnail'] ) {
                            echo "<img src='".$post['thumbnail']."'/>";
                        }
                        echo "</a>";
                    echo "</div>";
                    echo "<div class='post-content'>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    echo "</div>";
}
else {
    echo '<div class="">There is no blog found!</div>';
}
?>