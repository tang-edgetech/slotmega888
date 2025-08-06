<?php
$posts = [
    [
        "title" => "Mega888 APK Android Download Guide (2025) – Install & Play in Minutes",
        "slug" => "how-to-download-install-mega888-apk",
        "thumbnail" => "",
    ],
    [
        "title" => "Why Mega888 APK is the Top Choice for Slot Players in Malaysia",
        "slug" => "why-mega888-apk-top-choice-malaysia",
        "thumbnail" => "",
    ],
    [
        "title" => "Mega888 Sign Up Tutorial – How to Create Your Account Securely",
        "slug" => "mega888-sign-up-tutorial",
        "thumbnail" => "",
    ],
];

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
                    echo "<div class='swiper-slide post-item'>";
                        echo "<div class='post-item-inner'>";
                            echo "<div class='post-thumbnail mb-3'>";
                                echo "<a href='".$site_base_url . $post['slug'] . "'>";
                                if( $post['thumbnail'] ) {
                                    echo "<img src='".$post['thumbnail']."'/>";
                                }
                                echo "</a>";
                            echo "</div>";
                            echo "<div class='post-content'>";
                                echo "<h4 class='text-white'><a href='".$site_base_url . $post['slug'] . "'>" . htmlspecialchars($post['title']) . "</a></h4>";
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