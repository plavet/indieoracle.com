(function($) {

var $descriptions = $('#carousel-descriptions').children('li'),
	$controls = $('#carousel-controls').find('span'),
	$carousel = $('#carousel')
		.roundabout({childSelector:"img", minOpacity:1, minScale: 0.7, maxScale: 1, autoplay:false, minZ: 100, maxZ: 300, tilt: -2})
		.on('focus', 'img', function() {
			var slideNum = $carousel.roundabout("getChildInFocus");
			
			$descriptions.add($controls).removeClass('current');
			$($descriptions.get(slideNum)).addClass('current');
			$($controls.get(slideNum)).addClass('current');
		});

$controls.on('click dblclick', function() {
	var slideNum = -1,
		i = 0, len = $controls.length;

	for (; i<len; i++) {
		if (this === $controls.get(i)) {
			slideNum = i;
			break;
		}
	}
	
	if (slideNum >= 0) {
		$controls.removeClass('current');
		$(this).addClass('current');
		$carousel.roundabout('animateToChild', slideNum);
	}
});
//autoplayDuration: 6000, autoplayPauseOnHover: true, <-autoplay setings
}(jQuery));