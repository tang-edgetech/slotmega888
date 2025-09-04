<?php
$page_name = "Contact";
$page_slug = 'contact';
$page_thumbnail = "https://example.com/image.jpg";
include '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en-MY">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connect with Us – Help & Contact</title>
        <meta name="title" content="Connect with Us – Help & Contact">
        <meta name="description" content="Need help with Mega888 registration, login, or deposit? Contact slotmega888.app support via WhatsApp and Telegram. Fast, friendly, and local assistance every day.">
        <meta name="keywords" content="contact us, mega888 contact, contact mega888, mega888 live support, mega888 customer support, mega888 24/7">
        <meta property="og:locale" content="en">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo $site_base_url.'contact/';?>">
        <meta property="og:title" content="Connect with Us – Help & Contact">
        <meta property="adscription" content="Need help with Mega888 registration, login, or deposit? Contact slotmega888.app support via WhatsApp and Telegram. Fast, friendly, and local assistance every day.">
        <meta property="og:site_name" content="Connect with Us – Help & Contact">
        <meta property="og:image" content="<?php echo $site_base_url.'images/mega888-logo.png';?>">
        <meta property="article:tag" content="contact us">
        <meta property="article:tag" content="mega888 contact">
        <meta property="article:tag" content="contact mega888">
        <meta property="article:tag" content="mega888 live support">
        <meta property="article:tag" content="mega888 customer support">
        <meta property="article:tag" content="mega888 24/7">
        <meta name="twitter:url" content="<?php echo $site_base_url.'contact/';?>">
        <meta name="twitter:title" content="Connect with Us – Help & Contact">
        <meta name="twitter:description" content="Need help with Mega888 registration, login, or deposit? Contact slotmega888.app support via WhatsApp and Telegram. Fast, friendly, and local assistance every day.">
        <link rel="canonical" href="<?php echo $site_base_url.'contact/';?>">
        <link rel="alternate" hreflang="x-default" href="<?php echo $site_base_url.'contact/';?>">
        <link rel="alternate" hreflang="en-MY" href="<?php echo $site_base_url.'contact/';?>">
        <base href="../<?php echo $page_slug;?>">
        <?php include '../inc/stylesheet.php';?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "<?php echo $site_base_url;?>"
            },
            {
            "@type": "ListItem",
            "position": 2,
            "name": "Contact",
            "item": "<?php echo $site_base_url.'contact/';?>"
            }
        ]
        }
        </script>
    </head>
    <body>
        <?php include '../inc/navbar.php';?>
        <main class="app" id="app">
            <section class="enquiry-sources" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-11 col-xl-6 col-xxl-5 px-4">
                            <div class="text-editor text-center mb-5">
                                <h1>Contact Us</h1>
                                <p>Get in touch to see how we can help. You are important to us and we want to help you.</p>
                            </div>
                            <div class="btn-wrapper d-flex flex-column flex-md-row flex-wrap justify-content-center mb-5">
                                <a href="#" class="btn btn-rounded btn-with-icon btn-telegram text-white"><?php echo $icon_telegram_white;?><span>Telegram</span></a>
                                <a href="#" class="btn btn-rounded btn-with-icon btn-whatsapp text-white"><?php echo $icon_whatsapp_white;?><span>WhatsApp</span></a>
                            </div>
                            <div class="img-wrapper d-block mx-auto col-12 col-md-9 mb-5"><img src="./images/support-24-7.jpg" class="img-fluid"/></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include '../inc/footer.php';?>
        <?php include '../inc/popup-share-this.php';?>
    </body>
</html>