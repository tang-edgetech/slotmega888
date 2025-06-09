$(document).ready(function() {
    $(document).on('click', '#spin-rtp-game-list', function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.prop('disabled', true);
        $('#rtp-game-list ul').playSpin({
            time: 2500,
            onFinish: function(num) {
                $this.prop('disabled', false);
            }
        });
    });

    let deviceSwiper = null;
    const buildDeviceSwiper = false;
    if( window.matchMedia("(max-width: 767px)").matches ) {
        if( !deviceSwiper ) {
            deviceSwiper = new Swiper("#deviceSwiper", {
                slidesPerView: "auto",
                spaceBetween: 30,
                loop: false,
                slidesOffsetBefore: 24,
                slidesOffsetAfter: 24,
            });
        }
    }
    else {
        if (deviceSwiper) {
            deviceSwiper.destroy(true, true);
            deviceSwiper = null;
        }
    }
});