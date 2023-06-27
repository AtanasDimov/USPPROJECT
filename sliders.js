$('.slider--main').slick({
	asNavFor: '.slider--nav',
	prevArrow: '<a class="slick-prev"></a>',
	nextArrow: '<a class="slick-next"></a>',
});

$('.slider--nav').slick({
	asNavFor: '.slider--main',
	vertical: true,
	slidesToShow: 4,
	focusOnSelect: true,
	prevArrow: '<a class="slick-prev"></a>',
	nextArrow: '<a class="slick-next"></a>',
})