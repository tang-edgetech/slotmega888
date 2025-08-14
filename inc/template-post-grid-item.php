<?php
$post_date = date("d M Y", strtotime($post['published_date']));
echo "<div class='post-item post-item-".$index."'>";
    echo "<div class='post-item-inner'>";
        echo "<div class='post-thumbnail mb-3'>";
            echo "<a href='".$site_base_url . $post['slug'] . "'>";
            if( !empty($post_date) ) { echo "<div class='post-date'>".$post_date."</div>";}
            if( $post['thumbnail'] ) {
                echo "<img src='".$site_base_url."images/blogs/".$post['thumbnail']."'/>";
            }
            echo "</a>";
        echo "</div>";
        echo "<div class='post-content'>";
            echo "<h4 class='text-start text-white'><a href='".$site_base_url . $post['slug'] . "'>" . htmlspecialchars($post['title']) . "</a></h4>";
        echo "</div>";
    echo "</div>";
echo "</div>";
?>