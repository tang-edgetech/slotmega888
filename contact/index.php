<?php
$page_name = "Contact";
$page_slug = 'contact';
$page_thumbnail = "https://example.com/image.jpg";
include '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="../">
        <title><?php echo $page_title;?></title>
        <?php include '../inc/stylesheet.php';?>
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