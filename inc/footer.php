<footer class="footer px-2 px-xl-3" id="mastfoot">
    <div class="d-flex flex-wrap flex-row w-100 justify-content-center gap-3">
        <div class="col-12 px-3 py-4 footer-logo">
            <a href="." class="navbar-brand">
                <img src="images/logo-mega888.png" class="img-fit"/>
            </a>
        </div>
        <div class="col-12 col-md-11 col-xl-9 col-xxl-7">
            <div class="d-flex flex-wrap">
                <div class=""></div>
            </div>
        </div>
        <div class="col-12">
            <div class="copyright text-center">
                <p class="text-white mb-0"><?php echo date('Y');?> &copy; <a href="https://mega888mobile.com/" target="_blank" class="link">mega888mobile.com</a>. All rights reserved. | <a href="sitemap.xml" target="_blank" class="link">Sitemap</a> | <a href="responsible-gaming" target="_blank" class="link">Responsible Gaming</a> | <a href="privacy-policy" target="_blank" class="link">Privacy Policy</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/swiper-bundle.min.js"></script>
    <script id="mega888-script-extra">
        var mega888 = {
            title: <?= json_encode($page_title) ?>,
            url: <?= json_encode($page_url) ?>,
            thumbnail: <?= json_encode($page_thumbnail) ?>
        };
    </script>
    <script id="mega888-script" type="text/javascript" src="./js/scripts.js"></script>
</footer>