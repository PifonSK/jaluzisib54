new Swiper('.stocks-swiper-1', {
	loop: true,
	loopedSlides: 3,
	slidesPerView: 'auto',
	centeredSlides: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

new Swiper('.stocks-swiper-2', {
	loop: true,
	loopedSlides: 3,
	slidesPerView: 'auto',
	centeredSlides: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

new Swiper('.stocks-swiper-3', {
	loop: true,
	loopedSlides: 3,
	slidesPerView: 'auto',
	centeredSlides: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

new Swiper('.stocks-swiper-4', {
	loop: true,
	loopedSlides: 3,
	slidesPerView: 'auto',
	centeredSlides: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

$('.stocks__pagination-item').on('click', function() {
	$('.stocks__swiper').hide();
	$(`.stocks-swiper-${$(this).attr('slide')}`).show();
});

setTimeout(function() {
	$('.stocks-swiper-2').hide();
	$('.stocks-swiper-3').hide();
	$('.stocks-swiper-4').hide();
});