<?php
if( $posts ) {
?>
<section class="">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-xl-9 col-xxl-7 px-0 px-md-4">
<?php
            echo '<div class="swiper post-grid">';
                echo '<div class="swiper-wrapper">';
                foreach ($posts as $post) {
                    $post_date = date("d M Y", strtotime($post['published_date']));
                    echo "<div class='swiper-slide post-item'>";
                        echo "<div class='post-item-inner'>";
                            echo "<div class='post-thumbnail mb-3'>";
                                echo "<a href='".$site_base_url . $post['slug'] . "'>";
                                if( !empty($post_date) ) { echo "<div class='post-date'>".$post_date."</div>";}
                                if( $post['thumbnail'] ) {
                                    echo "<img src='".$site_base_url."images/".$post['thumbnail']."'/>";
                                }
                                echo "</a>";
                            echo "</div>";
                            echo "<div class='post-content'>";
                                echo "<h4 class='text-white'><a href='".$site_base_url . $post['slug'] . "'>" . htmlspecialchars($post['title']) . "</a></h4>";
                                echo "<div class='btn-wrapper'><a href='".$site_base_url . $post['slug'] . "' class='btn btn-read-more text-white p-0 text-hover-underline'><span>Read More</span><i class='fa fa-chevron-right ms-2'></i></a></div>";
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
            </div>
        </div>
    </div>
</section>