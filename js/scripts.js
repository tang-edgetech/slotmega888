$(document).ready(function() {
	var lastScrollTop = 0,
		navbar = $('#masthead');
	if( $('.post-grid')[0] ) {
		var $postSwiper = new Swiper('.post-grid', {
			slidesPerView: "auto",
			spaceBetween: 25,
			slidesOffsetBefore: 25,
			slidesOffsetAfter: 25,
			breakpoints: {
				0: {
					slidesPerView: "auto",
					spaceBetween: 25,
					slidesOffsetBefore: 25,
					slidesOffsetAfter: 25,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 30,
					slidesOffsetBefore: 0,
					slidesOffsetAfter: 0,
				}
			}
		});
	}

	if( $('#install-btn')[0] ) {
		document.getElementById('install-btn').addEventListener('click', function() {
			const url = window.location.href;
			const title = document.title;
			const shortcutContent = `[InternetShortcut]\nURL=${url}`;

			const blob = new Blob([shortcutContent], { type: 'application/octet-stream' });
			const a = document.createElement('a');
			a.href = URL.createObjectURL(blob);
			a.download = `${title}.url`;
			a.click();
			URL.revokeObjectURL(a.href);
		});
	}
	
	$('.share-button').click(function() {
		const network = $(this).data('network');
		const pageUrl = encodeURIComponent(window.location.href);
		const text = encodeURIComponent("Check this out!");
		const media = encodeURIComponent("https://example.com/image.jpg"); // Required for Pinterest

		let shareUrl = '';

		switch (network) {
			case 'facebook':
				shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
				break;
			case 'messenger':
				shareUrl = `fb-messenger://share?link=${pageUrl}`; // Only works on mobile with Messenger app
				break;
			case 'twitter':
				shareUrl = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${text}`;
				break;
			case 'linkedin':
				shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${pageUrl}`;
				break;
			case 'whatsapp':
				shareUrl = `https://wa.me/?text=${text}%20${pageUrl}`;
				break;
			case 'pinterest':
				shareUrl = `https://pinterest.com/pin/create/button/?url=${pageUrl}&media=${media}&description=${text}`;
				break;
			case 'telegram':
				shareUrl = `https://t.me/share/url?url=${pageUrl}&text=${text}`;
				break;
			case 'line':
				shareUrl = `https://social-plugins.line.me/lineit/share?url=${pageUrl}`;
				break;
			case 'wechat':
				alert("WeChat does not support direct web sharing. Please use the QR code option or share via app.");
				return;
		}

		if (shareUrl) {
			window.open(shareUrl, '_blank', 'width=600,height=400');
		}
	});

    $(document).on('click', '#masthead .navbar-collapse.show .navbar-close', function(e) {
		e.preventDefault();
		console.log('clicked');
		var $this = $(this),
			$button = $this.parents('.navbar-collapse').siblings('.navbar-toggler');
		$button.click();
	});

    $(document).on('click', '#copy-to-clipboard', function(e) {
        e.preventDefault();
        var $this = $(this),
            $copyText = $this.attr('data-url'),
			$prompt = $this.siblings('.copy-msg');
        navigator.clipboard.writeText($copyText).then(function () {
            console.log('Copied');
			$prompt.fadeIn();
			setTimeout(function() {
				$prompt.fadeOut();
			}, 5000);
        }).catch(function(error) {
            console.error('Error copying text: ', error);
        });
    });

    $(document).on('click', '#back-to-top', function(e) {
        e.preventDefault();
		$('html, body').stop().animate({ scrollTop: 0 }, 750);
    });

	floatingFunctionOnScroll();
	$(window).bind('scroll', function() {
		floatingFunctionOnScroll();
		headerScrollDetection();
	});
	function floatingFunctionOnScroll() {
		var $scrollTop = $(window).scrollTop();
		if( $scrollTop > 70 ) {
			$('.floating-list').fadeIn();
		}
		else {
			$('.floating-list').fadeOut();
		}
	}
	function headerScrollDetection() {
		var scrollTop = $(this).scrollTop();

		if (scrollTop > 70) {
			if (scrollTop > lastScrollTop) {
				navbar.addClass('scroll-down');
			} else {
				navbar.removeClass('scroll-down');
			}
		} else {
			navbar.removeClass('scroll-down');
		}

		lastScrollTop = scrollTop;
	}
});