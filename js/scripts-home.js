$(document).ready(function() {
    $(document).on('click', '#spin-rtp-game-list', function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.prop('disabled', true);
        $('#rtp-game-list ul').playSpin({
            time: '2500',
            onFinish: function(num) {
                $this.prop('disabled', false);
            }
        });
    });

    let deviceSwiper = null;
    const buildDeviceSwiper = false;
    autoBuildDestroyDeviceSwiper();
    $(window).on('resize', autoBuildDestroyDeviceSwiper);
    function autoBuildDestroyDeviceSwiper() {
        if( window.matchMedia("(max-width: 767px)").matches ) {
            if( !deviceSwiper ) {
                $("#deviceSwiper").addClass('swiper');
                $("#deviceSwiper .device-wrapper").addClass('swiper-wrapper');
                $("#deviceSwiper .device-slide").addClass('swiper-slide');
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
                $("#deviceSwiper").removeClass('swiper');
                $("#deviceSwiper .device-wrapper").removeClass('swiper-wrapper');
                $("#deviceSwiper .device-slide").removeClass('swiper-slide');
                deviceSwiper.destroy(true, true);
                deviceSwiper = null;
            }
        }
    }
});