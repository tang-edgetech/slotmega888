<footer class="footer px-4 px-md-2 px-xl-3" id="mastfoot">
    <div class="d-flex flex-wrap flex-row w-100 justify-content-center gap-4">
        <div class="col-12 px-2 px-md-3 py-4 footer-logo">
            <a href="." class="navbar-brand">
                <img src="images/mega888-logo.png" class="img-fit"/>
            </a>
        </div>
        <div class="col-12 col-md-9 col-xl-6">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="col-12 text-center">
                    <div class="footer-column py-3 pt-md-4">
                        <h4 class="text-uppercase text-white mb-4">Follow Us</h4>
                        <ul class="nav social-media justify-content-center d-flex">
                            <li class="nav-item facebook">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Facebook</span></a>
                            </li>
                            <li class="nav-item instagram">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Instagram</span></a>
                            </li>
                            <li class="nav-item linkedin">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Linkedin</span></a>
                            </li>
                            <li class="nav-item twitter">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Twitter</span></a>
                            </li>
                            <li class="nav-item telegram">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Telegram</span></a>
                            </li>
                            <li class="nav-item pinterest">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Pinterest</span></a>
                            </li>
                            <li class="nav-item email">
                                <a href="javascript:void(0);" class="nav-link"><span class="d-none">Email</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-column py-3 pt-md-4">
                        <h4 class="text-uppercase text-white mb-4">Location</h4>
                        <div class="map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.797981307952!2d101.61343627497112!3d3.1479379968274586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc495e8a352251%3A0x18d66b44ea097a64!2sMega888%20(Official%20Malaysia)!5e0!3m2!1sen!2ssg!4v1748920271803!5m2!1sen!2ssg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mega888 Office"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="copyright text-center">
                <p class="text-white mb-0"><?php echo date('Y');?> &copy; <a href="https://slotmega888.app/" target="_blank" class="link">slotmega888.app</a>. All rights reserved. | <a href="sitemap.xml" target="_blank" class="link">Sitemap</a> | <a href="responsible-gaming" target="_blank" class="link">Responsible Gaming</a> | <a href="privacy-policy" target="_blank" class="link">Privacy Policy</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/swiper-bundle.min.js"></script>
    <?php
    if( !empty($page_slug) ) {
        if( $page_slug == 'home' ) {
            echo '<script type="text/javascript" src="./js/slotmachine.min.js"></script>';
            echo '<script type="text/javascript" src="./js/jquery.easing.min.js"></script>';
            echo '<script type="text/javascript" src="./js/scripts-home.js?v='.$version.'"></script>';
        }
        if( $page_slug == 'mega888-rtp' ) {
            echo '<script type="text/javascript" src="./js/scripts-rtp.js?v='.$version.'"></script>';
        }
    }
    ?>
    <script id="mega888-script-extra">
        var mega888 = {
            title: <?= json_encode($page_title) ?>,
            url: <?= json_encode($page_url) ?>,
            thumbnail: <?= json_encode($page_thumbnail) ?>
        };
    </script>
    <script id="mega888-script" type="text/javascript" src="./js/scripts.js<?php echo '?v='.$version;?>"></script>

    <div class="floating-list">
        <div class="floating-list-inner">
            <div class="floating-item back-to-top" id="back-to-top"><span class="d-none">Back To Top</span><?php echo $icon_backtotop;?></div>
            <div class="floating-item whatsapp">
                <a href="javascript:void(0);" target="_self"><span class="d-none">WhatsApp</span><?php echo $icon_whatsapp;?></a>
            </div>
        </div>
    </div>
</footer>