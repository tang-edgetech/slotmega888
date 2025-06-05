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
});