<div class="modal fade popupShareThis" id="popupShareThis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="popupShareThisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-row justify-content-between w-100">
                    <h3 class="mb-0">Share</h3>
                    <button type="button" class="btn btn-close position-relative" data-bs-dismiss="modal"><span class="d-none">Close</span></button>
                </div>
            </div>
            <div class="modal-body">
                <div class="share-buttons">
                <?php
                $social_media = array(
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'whatsapp' => 'WhatsApp',
                    'linkedin' => 'LinkedIn',
                    'telegram' => 'Telegram',
                    'twitter' => 'Twitter',
                    'line' => 'LINE',
                );
                foreach( $social_media as $slug=>$label) {
                    echo '<button class="share-button '.$slug.'" data-network="'.$slug.'"><span class="d-none">'.$label.'</span></button>';
                }
                ?>
                </div>
            </div>
            <div class="modal-footer">
                <div class="copy-clipboard d-flex flex-row flex-nowrap align-items-center gap-3">
                    <i class="fa fa-link" aria-hidden="true"></i>
                    <p class="text-black mb-0"><?php echo $page_url;?></p>
                    <div class="btn-wrapper">
                        <button type="button" class="btn btn-copy-clipboard" id="copy-to-clipboard" data-url="<?php echo $page_url;?>">Copy</button>
                        <span class="copy-msg" id="copyMsg">Copied!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>